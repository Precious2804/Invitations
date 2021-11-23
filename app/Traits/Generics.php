<?php

namespace App\Traits;

use App\Models\Templates;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait Generics
{
    //with Authentication
    function dynamicPages($page){
        if(Auth::user() == ""){
            $user = ['loggedUserInfo'=>[]];
        } else{
            $user = ['loggedUserInfo'=>User::where('user_id', Auth::user()->user_id)->first()];
        }
        $templates = ['templates' => Templates::all()];
        return view($page)->with($user)->with($templates);
    }

    // a function that generates a random unique ID
    function generateId()
    {
        $unique_id = (string) Str::uuid();
        $exploded = explode('-', $unique_id);
        $n_unique_id = $exploded[4];
        return $n_unique_id;
    }

    function createUniqueID($table, $column)
    {
        $id = $this->generateId();
        return DB::table($table)->where($column, $id)->first() ? $this->createUniqueID($table, $column) :  $id;
    }

    //a function that generates random numbers
    function generateRand()
    {
        $random = rand(100000, 999999);
        return $random;
    }

    function createUniqueRand($table, $column)
    {
        $random = $this->generateRand();
        return DB::table($table)->where($column, $random)->first() ? $this->createUniqueRand($table, $column) : $random;
    }

}
