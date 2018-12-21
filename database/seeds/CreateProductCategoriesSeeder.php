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
            'name' => '錠剤',
            'en_name' => 'tablet',
        ]);

        ProductCategory::create([
            'name' => 'カプセル剤',
            'en_name' => 'capsule',
        ]);

        ProductCategory::create([
            'name' => '散剤',
            'en_name' => 'powder',
        ]);

        ProductCategory::create([
            'name' => '液剤',
            'en_name' => 'liquid',
        ]);

        ProductCategory::create([
            'name' => '吸入剤',
            'en_name' => 'inhalant',
        ]);

        ProductCategory::create([
            'name' => '噴霧剤',
            'en_name' => 'spray',
        ]);

        ProductCategory::create([
            'name' => 'トローチ',
            'en_name' => 'lozenge',
        ]);

        ProductCategory::create([
            'name' => '医療用品',
            'en_name' => 'medical_supplies',
        ]);

        ProductCategory::create([
            'name' => '医療機器',
            'en_name' => 'medical_device',
        ]);

        ProductCategory::create([
            'name' => '日用品',
            'en_name' => 'commodity',
        ]);

        ProductCategory::create([
            'name' => 'その他',
            'en_name' => 'other',
        ]);
    }
}
