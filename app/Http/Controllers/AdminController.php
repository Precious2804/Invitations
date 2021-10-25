<?php

namespace App\Http\Controllers;

use App\Models\Templates;
use App\Traits\Generics;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    use Generics;

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function save_temp()
    {
        return view('admin.save_temp');
    }

    public function save_now(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'name'=>'unique:templates'
        ]);
        $table = 'templates';
        $column = 'temp_id';
        $temp_id = $this->createUniqueID($table, $column);

        if ($request->file()) {
            $name = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('templates', $name, 'public');

            $template = new Templates();
            $template->temp_id = $temp_id;
            $template->name = $request->name;
            $template->image = '/storage/' . $filePath;
            $template->save();

            return back()->with('done', "Template has been added Successfully");
        }
    }
}
