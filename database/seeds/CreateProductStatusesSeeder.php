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
            'status' => 'unapproved',
        ]);

        // コンテナ待ち
        ProductStatus::create([
            'status' => 'wait_stock',
        ]);

        // 在庫
        ProductStatus::create([
            'status' => 'stocked',
        ]);

        // 返送待ち
        ProductStatus::create([
            'status' => 'wait_back',
        ]);

        // 返送後
        ProductStatus::create([
            'status' => 'backed',
        ]);

        // 廃棄待ち
        ProductStatus::create([
            'status' => 'wait_disposal',
        ]);

        // 廃棄後
        ProductStatus::create([
            'status' => 'disposal',
        ]);
    }
}
