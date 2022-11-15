<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
        	'name' => 'Administrador',
        	'role' => 'A',
        	'email' => 'admin@correo.com',
        	'password' => Hash::make('admin')
    	]);
    	DB::table('users')->insert([
        	'name' => 'Miguel',
        	'role' => 'P',
        	'email' => 'miguel@correo.com',
        	'password' => Hash::make('miguel')
    	]);

    }
}
