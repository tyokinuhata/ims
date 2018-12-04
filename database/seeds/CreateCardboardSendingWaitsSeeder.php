<?php

use Illuminate\Database\Seeder;
use App\Models\CardboardSendingWait;

/**
 * ダンボール送付待ち一覧のシーダー
 *
 * Class CreateCardboardSendingWaitsSeeder
 */
class CreateCardboardSendingWaitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CardboardSendingWait::truncate();

        CardboardSendingWait::create([
            'cardboard_id' => 1,
            'number' => 1,
            'user_id' => 3,
        ]);

        CardboardSendingWait::create([
            'cardboard_id' => 2,
            'number' => 2,
            'user_id' => 3,
        ]);

        CardboardSendingWait::create([
            'cardboard_id' => 3,
            'number' => 3,
            'user_id' => 3,
        ]);
    }
}
