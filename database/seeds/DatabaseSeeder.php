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
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeederseSeeder::class);
    }
}
