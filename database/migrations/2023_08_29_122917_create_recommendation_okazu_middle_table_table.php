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
        Schema::create('recommendation_okazu_middle_table', function (Blueprint $table) {
            $table->integer('game_1')->index('recommendation_okazu_middle_table_game_1');
            $table->integer('okazu_tokuten_1')->index('recommendation_okazu_middle_table_okazu_tokuten_1');
            $table->integer('game_2')->index('recommendation_okazu_middle_table_game_2');
            $table->integer('okazu_tokuten_2')->index('recommendation_okazu_middle_table_okazu_tokuten_2');
            $table->integer('count_2');

            $table->primary(['game_1', 'okazu_tokuten_1', 'game_2', 'okazu_tokuten_2']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommendation_okazu_middle_table');
    }
};
