<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();
        $this->call(ProductTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(SubscriptionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
