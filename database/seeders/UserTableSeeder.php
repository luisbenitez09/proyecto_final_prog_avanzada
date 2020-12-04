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

        $user = new User();
        $user->name = "Andrea";
        $user->lastname = "Peréz";
        $user->email = "andrea@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Angel";
        $user->lastname = "Ortega";
        $user->email = "angel@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Silvia";
        $user->lastname = "Rodriguez";
        $user->email = "silvia@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Miguel";
        $user->lastname = "Benitez";
        $user->email = "miguel@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Heidi";
        $user->lastname = "Rábago";
        $user->email = "heidi@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Susana";
        $user->lastname = "Hernandez";
        $user->email = "susana@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Reynaldo";
        $user->lastname = "Manríquez";
        $user->email = "reynaldo@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Corina";
        $user->lastname = "Díaz";
        $user->email = "corina@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Armando";
        $user->lastname = "Tercero";
        $user->email = "armando@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();

        $user = new User();
        $user->name = "Javier";
        $user->lastname = "Cota";
        $user->email = "javier@gmail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();
    }
}