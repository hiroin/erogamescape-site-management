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
        Schema::create('povadjust', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('pov1')->index('povadjust_pov1');
            $table->integer('pov2')->nullable()->index('povadjust_pov2');
            $table->text('handle')->nullable();
            $table->text('hitokoto')->nullable();
            $table->text('transaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povadjust');
    }
};
