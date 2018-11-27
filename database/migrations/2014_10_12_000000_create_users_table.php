<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 会員テーブル
 *
 * Class CreateUsersTable
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('user_id')->comment('会員ID');
            $table->string('username')->comment('会員名');
            $table->string('sex')->comment('性別');
            $table->text('address')->comment('住所');
            $table->unsignedInteger('age')->comment('年齢');
            $table->string('email')->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->unsignedInteger('charge')->default(0)->comment('プリペイド残高');
            $table->string('type')->comment('ユーザ種別');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
