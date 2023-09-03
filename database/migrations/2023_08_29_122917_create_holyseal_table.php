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
        Schema::create('holyseal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game');
            $table->integer('holyseal_id')->index('holyseal_holyseal_id');

            $table->unique(['game', 'holyseal_id'], 'holyseal_game_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holyseal');
    }
};
