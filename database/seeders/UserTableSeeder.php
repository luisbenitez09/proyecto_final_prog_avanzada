<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Maria";
        $user->lastname = "Meza";
        $user->email = "maria@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Luis";
        $user->lastname = "Benitez";
        $user->email = "luis@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "1";
        $user->save();
    }
}