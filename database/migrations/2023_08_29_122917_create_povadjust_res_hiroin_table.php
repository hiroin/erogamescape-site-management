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
        Schema::create('povadjust_res_hiroin', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('pov1')->index('povadjust_res_hiroin_pov1');
            $table->integer('pov2')->index('povadjust_res_hiroin_pov2');
            $table->boolean('result');
            $table->text('hitokoto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povadjust_res_hiroin');
    }
};
