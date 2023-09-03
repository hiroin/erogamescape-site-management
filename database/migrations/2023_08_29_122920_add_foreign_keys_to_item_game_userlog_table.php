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
        Schema::table('item_game_userlog', function (Blueprint $table) {
            $table->foreign(['item', 'game'], 'item_game_userlog_item_fkey')->references(['item', 'game'])->on('item_game')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_game_userlog', function (Blueprint $table) {
            $table->dropForeign('item_game_userlog_item_fkey');
        });
    }
};
