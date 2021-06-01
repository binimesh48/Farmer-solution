<?php

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
      DB::table('users')->insert([
          'name' => 'Administrator',
          'phone' => '1234567897',
          'email' => 'admin@gmail.com',
          'role' => 'Admin',
          'password' => Hash::make('admin@gmail.com'),
      ]);
    }
}
