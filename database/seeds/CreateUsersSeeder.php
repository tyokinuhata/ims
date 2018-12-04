<?php

use Illuminate\Database\Seeder;
use App\Models\User;

/**
 * ユーザのシーダー
 *
 * Class CreateUsersSeeder
 */
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // 管理者
        User::create([
            'user_id' => 'admin',
            'username' => '管理者',
            'sex' => 'man',
            'address' => 'hogehogeunko',
            'age' => 6,
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'charge' => 0,
            'type' => 'admin'
        ]);

        // 従業員
        User::create([
            'user_id' => 'employee',
            'username' => '従業員',
            'sex' => 'man',
            'address' => 'hogehogeunko',
            'age' => 6,
            'email' => 'employee@employee.com',
            'password' => Hash::make('password'),
            'charge' => 0,
            'type' => 'employee'
        ]);

        // 販売者
        User::create([
            'user_id' => 'seller',
            'username' => '販売者',
            'sex' => 'man',
            'address' => 'hogehogeunko',
            'age' => 6,
            'email' => 'seller@seller.com',
            'password' => Hash::make('password'),
            'charge' => 0,
            'type' => 'seller'
        ]);

        // 購入者
        User::create([
            'user_id' => 'customer',
            'username' => '購入者',
            'sex' => 'man',
            'address' => 'hogehogeunko',
            'age' => 6,
            'email' => 'customer@customer.com',
            'password' => Hash::make('password'),
            'charge' => 0,
            'type' => 'customer'
        ]);
    }
}
