<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('admins')->insert([
          'name'        => 'admin',
          'email'       => 'admin@test.com',
          'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          'password'    => Hash::make('admin123')
      ]);
    }
}
