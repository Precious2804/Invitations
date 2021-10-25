<?php

namespace Database\Seeders;

use App\Traits\Generics;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use Generics;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\User::create([
            'user_id'=>$this->createUniqueID('users', 'user_id'),
            'username'=>"Admin",
            'email'=>"admin@gmail.com",
            'phone'=>"089001919982",
            'isAdmin'=>"1",
            'isVerified'=>"1",
            'password'=>Hash::make('admin')
        ]);

        // \App\Models\User::factory(10)->create();
        $table = 'templates';
        $column = 'temp_id';
        $temp1 = \App\Models\Templates::create([
            'temp_id'=>$this->createUniqueID($table, $column),
            'name'=>"Blank Background",
            'image'=>"/storage/templates/1635167984_blank.PNG"
        ]);
        $temp2 = \App\Models\Templates::create([
            'temp_id'=>$this->createUniqueID($table, $column),
            'name'=>"Template1",
            'image'=>"/storage/templates/1635164476_template1.png"
        ]);
        $temp3 = \App\Models\Templates::create([
            'temp_id'=>$this->createUniqueID($table, $column),
            'name'=>"Template2",
            'image'=>"/storage/templates/1635164530_template2.png"
        ]);
    }
}
