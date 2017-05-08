<?php

use Carbon\Carbon;
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
      DB::table('users')->insert([
          'name'        => 'User',
          'email'       => 'user@test.com',
          'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          'password'    => Hash::make('user123')
      ]);
      DB::table('users')->insert([
          'name'        => 'John Doe',
          'email'       => 'John@test.com',
          'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          'password'    => Hash::make('john123')
      ]);
    }
}
