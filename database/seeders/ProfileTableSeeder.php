<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()       //hardcode user in here
    {
        $P1 = new Profile;
        $P1->name = "John Smith";
        $P1->save();
        //add fake email here?
        //do i need to add a password

    }
}
