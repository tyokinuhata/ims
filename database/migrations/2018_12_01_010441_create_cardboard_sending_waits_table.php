<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * ダンボール送付待ち一覧テーブル
 *
 * Class CreateCardboardSendingWaitsTable
 */
class CreateCardboardSendingWaitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardboard_sending_waits', function (Blueprint $table) {
            $table->increments('id')->comment('ダンボール送付待ちID');
            $table->unsignedInteger('cardboard_id')->comment('ダンボールID');
            $table->unsignedInteger('number')->comment('個数');
            $table->string('user_id')->comment('ユーザID');
            $table->timestamps();

            $table->foreign('cardboard_id')->references('id')->on('cardboards');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardboard_sending_waits');
    }
}
