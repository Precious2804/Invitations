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
        $temp7 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template6",
            'image' => "/storage/templates/1637713854_image1.jpg"
        ]);
        $temp8 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template7",
            'image' => "/storage/templates/1637713874_image2.jpg"
        ]);
        $temp9 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template8",
            'image' => "/storage/templates/1637713900_image3.jpg"
        ]);
        $temp10 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template9",
            'image' => "/storage/templates/1637713917_image4.jpg"
        ]);
        $temp11 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template10",
            'image' => "/storage/templates/1637713933_image5.jpg"
        ]);
        $temp12 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template11",
            'image' => "/storage/templates/1637713949_image6.jpg"
        ]);
        $temp13 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template12",
            'image' => "/storage/templates/1637713969_image7.jpg"
        ]);
        $temp14 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template13",
            'image' => "/storage/templates/1637713989_image8.jpg"
        ]);
        $temp15 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template14",
            'image' => "/storage/templates/1637714011_image10.jpg"
        ]);
        $temp16 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template15",
            'image' => "/storage/templates/1637714023_imag9.jpg"
        ]);
        $temp17 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template16",
            'image' => "/storage/templates/1637714123_image12.jpg"
        ]);
        $temp18 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template17",
            'image' => "/storage/templates/1637714141_image13.jpg"
        ]);
        $temp19 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template18",
            'image' => "/storage/templates/1637714160_image14.jpg"
        ]);
        $temp20 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template19",
            'image' => "/storage/templates/1637714178_image15.jpg"
        ]);
        $temp21 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template20",
            'image' => "/storage/templates/1637714193_image16.jpg"
        ]);
        $temp22 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template21",
            'image' => "/storage/templates/1637714218_image17.jpg"
        ]);
        $temp23 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template22",
            'image' => "/storage/templates/1637714235_image18.jpg"
        ]);
        $temp24 = \App\Models\Templates::create([
            'temp_id' => $this->createUniqueID($table, $column),
            'name' => "Template23",
            'image' => "/storage/templates/1637714248_image19.jpg"
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
