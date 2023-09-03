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
        Schema::create('hanbaisuu', function (Blueprint $table) {
            $table->integer('game');
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('hanbaisuu');

            $table->primary(['game', 'startdate']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hanbaisuu');
    }
};
