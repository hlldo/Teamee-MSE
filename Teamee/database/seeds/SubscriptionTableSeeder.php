<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SubscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('subscriptions')->insert([
          'email'       => 'John@test.com',
          'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('subscriptions')->insert([
          'email'       => 'Jane@example.com',
          'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('subscriptions')->insert([
          'email'       => 'William@testing.com',
          'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
