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
        Schema::table('game_banner_getchu_widesky', function (Blueprint $table) {
            $table->foreign(['game'], 'game_banner_getchu_widesky_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_banner_getchu_widesky', function (Blueprint $table) {
            $table->dropForeign('game_banner_getchu_widesky_game_fkey');
        });
    }
};
