<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //create role
        $role = new Role;
        $role->name = "admin";
        $role->save();

        $role = new Role;
        $role->name = "user";
        $role->save();


        //create account
        $sekretarisJurusan = new User;
        $sekretarisJurusan->name = "Sekretraris";
        $sekretarisJurusan->email = "sekretaris@gmail.com";
        $sekretarisJurusan->password = bcrypt("sekretaris");
        $sekretarisJurusan->save();
        
        $sekretarisJurusan->assignRole("admin");
    }
}
