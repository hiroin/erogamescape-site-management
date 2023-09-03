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
        Schema::table('shokushu', function (Blueprint $table) {
            $table->foreign(['creater'], 'shokushu_creater_fkey')->references(['id'])->on('createrlist');
            $table->foreign(['game'], 'shokushu_game_fkey')->references(['id'])->on('gamelist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shokushu', function (Blueprint $table) {
            $table->dropForeign('shokushu_creater_fkey');
            $table->dropForeign('shokushu_game_fkey');
        });
    }
};
