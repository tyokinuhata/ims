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

        // 承認待ち: 1
        ProductStatus::create([
            'status' => 'unapproved',
        ]);

        // コンテナ待ち: 2
        ProductStatus::create([
            'status' => 'wait_stock',
        ]);

        // 在庫: 3
        ProductStatus::create([
            'status' => 'stocked',
        ]);

        // 返送待ち: 4
        ProductStatus::create([
            'status' => 'wait_back',
        ]);

        // 返送後: 5
        ProductStatus::create([
            'status' => 'backed',
        ]);

        // 廃棄待ち: 6
        ProductStatus::create([
            'status' => 'wait_disposal',
        ]);

        // 廃棄後: 7
        ProductStatus::create([
            'status' => 'disposal',
        ]);
    }
}
