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
        Schema::table('game_store_sp', function (Blueprint $table) {
            $table->foreign(['game'], 'game_store_sp_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['store'], 'game_store_sp_store_fkey')->references(['id'])->on('storelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_store_sp', function (Blueprint $table) {
            $table->dropForeign('game_store_sp_game_fkey');
            $table->dropForeign('game_store_sp_store_fkey');
        });
    }
};
