<?php

use Illuminate\Database\Seeder;
use App\Models\Cardboard;

class CreateCardboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cardboard::truncate();

        Cardboard::create([
            'size' => 'S',
        ]);

        Cardboard::create([
            'size' => 'M',
        ]);

        Cardboard::create([
            'size' => 'L',
        ]);
    }
}
