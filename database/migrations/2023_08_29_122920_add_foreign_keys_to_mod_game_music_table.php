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
        Schema::table('mod_game_music', function (Blueprint $table) {
            $table->foreign(['music', 'game'], 'mod_game_music_music_fkey')->references(['music', 'game'])->on('game_music')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mod_game_music', function (Blueprint $table) {
            $table->dropForeign('mod_game_music_music_fkey');
        });
    }
};
