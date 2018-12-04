<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

/**
 * 商品カテゴリのシーダー
 *
 * Class CreateProductCategoriesSeeder
 */
class CreateProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::truncate();

        ProductCategory::create([
            'name' => '錠剤'
        ]);

        ProductCategory::create([
            'name' => 'カプセル剤'
        ]);

        ProductCategory::create([
            'name' => '散剤'
        ]);

        ProductCategory::create([
            'name' => '液剤'
        ]);

        ProductCategory::create([
            'name' => '吸入剤'
        ]);

        ProductCategory::create([
            'name' => '噴霧剤'
        ]);

        ProductCategory::create([
            'name' => 'トローチ'
        ]);

        ProductCategory::create([
            'name' => '医療用品'
        ]);

        ProductCategory::create([
            'name' => '医療機器'
        ]);

        ProductCategory::create([
            'name' => '日用品'
        ]);

        ProductCategory::create([
            'name' => 'その他'
        ]);
    }
}
