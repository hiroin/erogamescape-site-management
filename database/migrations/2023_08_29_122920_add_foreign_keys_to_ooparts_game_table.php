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
        Schema::table('ooparts_game', function (Blueprint $table) {
            $table->foreign(['game'], 'ooparts_game_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['ooparts'], 'ooparts_game_ooparts_fkey')->references(['id'])->on('ooparts')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ooparts_game', function (Blueprint $table) {
            $table->dropForeign('ooparts_game_game_fkey');
            $table->dropForeign('ooparts_game_ooparts_fkey');
        });
    }
};
