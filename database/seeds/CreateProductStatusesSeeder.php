<?php

use Illuminate\Database\Seeder;
use App\Models\ProductStatus;

class CreateProductStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductStatus::truncate();

        // 承認待ち
        ProductStatus::create([
            'status' => 'unapproved'
        ]);

        // コンテナ待ち
        ProductStatus::create([
            'status' => 'wait_stock'
        ]);

        // 在庫
        ProductStatus::create([
            'status' => 'stock'
        ]);

        // 返送待ち
        ProductStatus::create([
            'status' => 'wait_return'
        ]);

        // 返送後
        ProductStatus::create([
            'status' => 'returned'
        ]);
    }
}
