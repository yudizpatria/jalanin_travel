<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'username' => 'Admin',
            'email' =>  'admin@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '081295915658'
        ]);
    }
}
