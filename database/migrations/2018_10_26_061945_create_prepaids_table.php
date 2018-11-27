<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * プリペイドテーブル
 *
 * Class CreatePrepaidsTable
 */
class CreatePrepaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepaids', function (Blueprint $table) {
            $table->increments('prepaid_id')->comment('プリペイドID');
            $table->string('prepaid_number')->unique()->comment('プリペイド番号');
            $table->unsignedInteger('value')->comment('価格');
            $table->boolean('is_valid')->comment('有効かどうか');
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
        Schema::dropIfExists('prepaids');
    }
}
