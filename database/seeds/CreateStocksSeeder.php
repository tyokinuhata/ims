<?php

use Illuminate\Database\Seeder;
use App\Models\Stock;
use App\Models\Product;

class CreateStocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::truncate();

        $len = Product::max('id');

        for ($i = 0; $i < $len; $i++) {
            Stock::create([
                'stock_number' => mt_rand(1, 500),
                'safety_stock_number' => mt_rand(1, 500),
                'product_id' => $i + 1,
            ]);
        }
    }
}
