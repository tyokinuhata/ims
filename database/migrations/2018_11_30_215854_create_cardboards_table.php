<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * ダンボール情報テーブル
 *
 * Class CreateCardboardsTable
 */
class CreateCardboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardboards', function (Blueprint $table) {
            $table->increments('id')->comment('ダンボールID');
            $table->string('size')->comment('サイズ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardboards');
    }
}
