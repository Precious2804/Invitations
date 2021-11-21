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
            'user_id' => $this->createUniqueID('users', 'user_id'),
            'username' => "Admin",
            'email' => "admin@gmail.com",
            'phone' => "089001919982",
            'isAdmin' => "1",
            'isVerified' => "1",
            'password' => Hash::make('admin')
        ]);

        // \App\Models\User::factory(10)->create();
        $table = 'templates';
        $column = 'temp_id';

        $temp2 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template1",
            'image' => "/storage/templates/1635164476_template1.png"
        ]);
        $temp3 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template2",
            'image' => "/storage/templates/1635164530_template2.png"
        ]);
        $temp4 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template3",
            'image' => "/storage/templates/1637421846_template3.png"
        ]);
        $temp5 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template4",
            'image' => "/storage/templates/1637421864_template4.png"
        ]);
        $temp6 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template5",
            'image' => "/storage/templates/1637421878_template5.png"
        ]);
        $temp1 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Blank Background",
            'image' => "/storage/templates/1635167984_blank.PNG"
        ]);

        
        $event1 = \App\Models\EventType::create([
            'event_name'=>"Wedding Celebration",
            'no_of_celebrant'=>"2",
            'name'=>"wedding"
        ]);
        $event2 = \App\Models\EventType::create([
            'event_name'=>"Birthday Anniversary",
            'no_of_celebrant'=>"1",
            'name'=>"birthday"
        ]);
        $event3 = \App\Models\EventType::create([
            'event_name'=>"Funeral Ceremony",
            'no_of_celebrant'=>"1",
            'name'=>'funeral'
        ]);
        $event4 = \App\Models\EventType::create([
            'event_name'=>"Graduation Party",
            'no_of_celebrant'=>"1",
            'name'=>'graduation'
        ]);
        $event5 = \App\Models\EventType::create([
            'event_name'=>"Seminar",
            'no_of_celebrant'=>"1",
            'name'=>'seminar'
        ]);
        $event6 = \App\Models\EventType::create([
            'event_name'=>"Conference",
            'no_of_celebrant'=>"1",
            'name'=>'conference'
        ]);
    }
}
