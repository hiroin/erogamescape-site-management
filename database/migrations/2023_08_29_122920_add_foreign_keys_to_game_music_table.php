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
        Schema::table('game_music', function (Blueprint $table) {
            $table->foreign(['game'], 'game_music_game_fkey')->references(['id'])->on('gamelist')->onDelete('CASCADE');
            $table->foreign(['music'], 'game_music_music_fkey')->references(['id'])->on('musiclist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_music', function (Blueprint $table) {
            $table->dropForeign('game_music_game_fkey');
            $table->dropForeign('game_music_music_fkey');
        });
    }
};
