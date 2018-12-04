<?php

use Illuminate\Database\Seeder;
use App\Models\Prepaid;

/**
 * プリペイドのシーダー
 *
 * Class CreatePrepaidsSeeder
 */
class CreatePrepaidsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prepaid::truncate();

        Prepaid::create([
            'prepaid_number' => '0123456789',
            'value' => 1000,
            'is_valid' => true,
        ]);

        Prepaid::create([
            'prepaid_number' => '1234567890',
            'value' => 2000,
            'is_valid' => true,
        ]);

        Prepaid::create([
            'prepaid_number' => '2345678901',
            'value' => 5000,
            'is_valid' => true,
        ]);

        Prepaid::create([
            'prepaid_number' => '3456789012',
            'value' => 10000,
            'is_valid' => true,
        ]);
    }
}
