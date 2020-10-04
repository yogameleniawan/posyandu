<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin'.'@posyandu.com',
            'role' => 'Admin',
            'password' => Hash::make('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'Staff Satu',
            'email' => 'staff'.'@posyandu.com',
            'role' => 'Staff',
            'password' => Hash::make('staff'),
        ]);
        DB::table('users')->insert([
            'name' => 'Staff',
            'email' => 'posyandu'.'@posyandu.com',
            'role' => 'Staff2',
            'password' => Hash::make('posyandu'),
        ]);
    }
}
