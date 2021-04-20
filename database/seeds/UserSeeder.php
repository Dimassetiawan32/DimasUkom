<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Role Admin
        $admin = User::create([
            'name'       => 'Dimas Setiawan',
            'email'      => 'admin@role',
            'password'   => bcrypt('iniadmin'),
        ]);

        $admin->assignRole('Admin');

        // Role Gudang
        $gudang = User::create([
           'name'       => 'Yoga Arief',
           'email'      => 'gudang@role',
           'password'   => bcrypt('inigudang'),
        ]);

        $gudang->assignRole('Gudang');


    }
}
