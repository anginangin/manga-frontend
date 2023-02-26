<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        \DB::table('users')->insert([
            'name'          => 'Admin',
            'email'         => 'demo@gmail.com',
            'password'      => Hash::make('lobangjangkrik'),
            'role'          => 1,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
