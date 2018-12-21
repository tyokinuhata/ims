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

        // 1
        ProductStatus::create([
            'name' => '未承認',
            'en_name' => 'unapproved',
        ]);

        // 2
        ProductStatus::create([
            'name' => 'コンテナ待ち',
            'en_name' => 'wait_container',
        ]);

        // 3
        ProductStatus::create([
            'name' => '在庫',
            'en_name' => 'stock',
        ]);

        // 4
        ProductStatus::create([
            'name' => '返送待ち',
            'en_name' => 'wait_return',
        ]);

        // 5
        ProductStatus::create([
            'name' => '返送後',
            'en_name' => 'return',
        ]);

        // 6
        ProductStatus::create([
            'name' => '廃棄待ち',
            'en_name' => 'wait_disposal',
        ]);

        // 7
        ProductStatus::create([
            'name' => '廃棄後',
            'en_name' => 'disposal',
        ]);
    }
}
