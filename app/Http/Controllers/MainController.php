<?php

namespace App\Http\Controllers;

use App\Models\EmailVerifyToken;
use App\Models\Templates;
use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use App\Rules\MatchOldPassword;
use App\Traits\Generics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Match_;

class MainController extends Controller
{
    //
    use Generics;
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function doRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        $table = 'users';
        $column = 'user_id';
        $user_id = $this->createUniqueID($table, $column);

        User::create([
            'user_id' => $user_id,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        //sending the mail
        $name = $request->name;
        $token = $this->createUniqueID('email_verify_tokens', 'token');
        //sellect the user
        $user = User::where('email', $request->email)->first();
        $user->notify(new VerifyEmailNotification($name, $request->email, $token));
        EmailVerifyToken::create([
            'token' => $token,
            'email' => $request->email
        ]);
        return back()->with('verifyEmail', "An Email Verification Link has been sent to the email address " . $request->email . " for veification. Do ensure to verify your email address before progressing!");
    }

    public function completeVerification(Request $req)
    {
        $email = $req->email;
        $token = $req->token;

        if (EmailVerifyToken::where('token', $token)->exists() == true) {

            $user = User::where('email', $email)->first();
            $user->update([
                'isVerified' => 1
            ]);
            $tok = EmailVerifyToken::where('token', $token)->first();
            $tok->delete();
            return view('auth.complete-verification');
        }
    }

    public function doLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $req->email)->first();
        if (User::where('email', $req->email)->exists() == true) {

            $credentials = ['email' => $req->email, 'password' => $req->password];
            if (Auth::validate($credentials) == true) {
                Auth::attempt($credentials, $req->remember_me == 'on' ? true : false);
                if ($user['isAdmin'] == 1) {
                    return redirect()->to(route('admin.dashboard'));
                } else {
                    return redirect()->to(route('dashboard'));
                }
                // else {
                //     if ($user['isVerified'] == 0) {
                //         return back()->with('unverified', "This account has not been verified");
                //     } else {
                //         return redirect()->to(route('dashboard'));
                //     }
                // }
            } else {
                return redirect()->back()->with('info', 'Incorrect password!, please check your credentials and try again.')->withInput($req->only('loginEmail'));
            }
        } else {
            return redirect()->back()->with('infoEmail', 'Email address does not exist!, please check your credentials and try again.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('auth.login')->with('out', "Logout was Successfull");
    }

    public function dashboard()
    {
        $page = 'dashboard';
        return $this->dynamicPages($page);
    }
    public function profile()
    {
        $page = 'profile';
        return $this->dynamicPages($page);
    }

    public function update_profile(Request $req)
    {
        $user = User::where('user_id', Auth::user()->user_id)->first();
        $req->validate([
            'picture' => 'mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);
        if ($req->file()) {
            $name = time() . '_' . $req->picture->getClientOriginalName();
            $filePath = $req->file('picture')->storeAs('uploads', $name, 'public');

            $user->picture = '/storage/' . $filePath;
            $user->username = $req->username;
            $user->fullname = $req->fullname;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->save();

            return back()->with('updated', "Profile Update was Successfull!");
        }
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::where('user_id', Auth::user()->user_id)->first();
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', "Your Password was Updated successfully");
    }

    public function select_design()
    {
        $page = 'select_design';
        $templates = ['templates'=>Templates::all()];
        return $this->dynamicPages($page)->with($templates);
    }

    public function create_invite($temp_id)
    {   
        $select_temp = ['select_temp'=>Templates::where('temp_id', $temp_id)->first()];

        $page = 'create_invite';
        return $this->dynamicPages($page)->with($select_temp);
    }
}
