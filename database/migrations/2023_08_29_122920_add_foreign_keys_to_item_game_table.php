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
        Schema::table('item_game', function (Blueprint $table) {
            $table->foreign(['game'], 'item_game_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['item'], 'item_game_item_fkey')->references(['id'])->on('itemlist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_game', function (Blueprint $table) {
            $table->dropForeign('item_game_game_fkey');
            $table->dropForeign('item_game_item_fkey');
        });
    }
};
