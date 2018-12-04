<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateUsersSeeder::class);
        $this->call(CreateProductsSeeder::class);
        $this->call(CreateStocksSeeder::class);
        $this->call(CreateProductCategoriesSeeder::class);
        $this->call(CreateCardboardSeeder::class);
        $this->call(CreateCardboardSendingWaitsSeeder::class);
        $this->call(CreatePrepaidsSeeder::class);
    }
}
