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
        Schema::create('connection_between_lists_of_games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_subject')->index('connection_between_lists_of_games_game_subject');
            $table->integer('game_object')->index('connection_between_lists_of_games_game_object');
            $table->boolean('reservation_del')->default(false);
            $table->text('kind')->index('connection_between_lists_of_games_game_kind');
            $table->text('memo')->nullable();
            $table->timestamp('timestamp')->nullable()->default('now');
            $table->boolean('freeze_flag')->default(false);

            $table->unique(['game_subject', 'game_object', 'kind'], 'connection_between_lists_of_games_game_subject_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('connection_between_lists_of_games');
    }
};
