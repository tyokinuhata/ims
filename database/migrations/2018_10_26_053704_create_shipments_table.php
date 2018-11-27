<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 納品テーブル
 *
 * Class CreateShipmentsTable
 */
class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('shipment_id')->comment('出庫ID');
            $table->unsignedInteger('product_id')->comment('商品ID');
            $table->string('user_id')->comment('会員ID');
            $table->dateTime('ordered_at')->comment('注文日');
            $table->dateTime('shipment_at')->comment('出庫日');
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
        Schema::dropIfExists('shipments');
    }
}
