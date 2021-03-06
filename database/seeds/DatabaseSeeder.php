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
        $this->call(CreateProductCategoriesSeeder::class);
        $this->call(CreateProductStatusesSeeder::class);
        $this->call(CreateStockAdditionStatusesSeeder::class);
        $this->call(CreateCardboardsSeeder::class);
        $this->call(CreateCardboardSendingWaitsSeeder::class);
        $this->call(CreatePrepaidsSeeder::class);
    }
}
