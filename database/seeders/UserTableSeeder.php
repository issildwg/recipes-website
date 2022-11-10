<?php


namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()       //hardcode user in here
    {
        $P1 = new User;
        $P1->id = 1;
       // $P1->user_id = "1";
        $P1->name = "John Smith";
        $P1->email = "JSmith@gmail.com";
        $P1->password = "12345678";
        $P1->save();
    }
}
