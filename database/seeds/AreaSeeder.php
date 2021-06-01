<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('areas')->insert([
          'user_id' => '1',
          'type' => 'state',
          'value' => 'Bihar',
      ]);
      DB::table('areas')->insert([
          'user_id' => '1',
          'type' => 'state',
          'value' => 'Jharkhand',
      ]);
    }
}
