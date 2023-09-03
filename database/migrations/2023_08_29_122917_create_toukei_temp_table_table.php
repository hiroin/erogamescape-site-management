<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toukei_temp_table', function (Blueprint $table) {
            $table->text('gamename');
            $table->text('brandname');
            $table->date('sellday')->nullable();
            $table->integer('median')->nullable();
            $table->float('average', 0, 0)->nullable();
            $table->integer('stddev')->nullable();
            $table->integer('count')->nullable();
            $table->integer('allcount')->nullable();
            $table->integer('game_id')->index('toukei_temp_table_game_id');
            $table->integer('brand_id')->index('toukei_temp_table_brand_id');
            $table->integer('coterie')->nullable();
            $table->boolean('erogame')->nullable();
            $table->text('model')->nullable();
            $table->integer('boyslove')->nullable();

            $table->unique(['game_id', 'brand_id'], 'toukei_temp_table_game_id_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toukei_temp_table');
    }
};
