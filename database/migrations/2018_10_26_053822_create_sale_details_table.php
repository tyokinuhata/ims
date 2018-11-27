<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 売上詳細テーブル
 *
 * Class CreateSaleDetailsTable
 */
class CreateSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_details', function (Blueprint $table) {
            $table->increments('sale_detail_id')->comment('売上詳細ID');
            $table->unsignedInteger('sale_id')->comment('売上ID');
            $table->timestamps();

            $table->foreign('sale_id')->references('sale_id')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_details');
    }
}
