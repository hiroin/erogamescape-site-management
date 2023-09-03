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
        Schema::table('connection_between_lists_of_games_history', function (Blueprint $table) {
            $table->foreign(['cg_id'], 'connection_between_lists_of_games_history_cg_id_fkey')->references(['id'])->on('connection_between_lists_of_games')->onDelete('CASCADE');
            $table->foreign(['game_object'], 'connection_between_lists_of_games_history_game_object_fkey')->references(['id'])->on('gamelist')->onDelete('CASCADE');
            $table->foreign(['game_subject'], 'connection_between_lists_of_games_history_game_subject_fkey')->references(['id'])->on('gamelist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('connection_between_lists_of_games_history', function (Blueprint $table) {
            $table->dropForeign('connection_between_lists_of_games_history_cg_id_fkey');
            $table->dropForeign('connection_between_lists_of_games_history_game_object_fkey');
            $table->dropForeign('connection_between_lists_of_games_history_game_subject_fkey');
        });
    }
};
