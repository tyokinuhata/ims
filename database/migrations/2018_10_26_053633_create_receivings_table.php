<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 発注テーブル
 *
 * Class CreateReceivingsTable
 */
class CreateReceivingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receivings', function (Blueprint $table) {
            $table->increments('receiving_id')->comment('入庫ID');
            $table->unsignedInteger('product_id')->comment('商品ID');
            $table->string('user_id')->comment('会員ID');
            $table->dateTime('ordered_at')->comment('発注日');
            $table->dateTime('receiving_at')->comment('入庫日');
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('products');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receivings');
    }
}
