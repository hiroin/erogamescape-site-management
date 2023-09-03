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
        Schema::table('amazon_game', function (Blueprint $table) {
            $table->foreign(['asin'], 'amazon_game_asin_fkey')->references(['asin'])->on('amazonlist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['game'], 'amazon_game_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amazon_game', function (Blueprint $table) {
            $table->dropForeign('amazon_game_asin_fkey');
            $table->dropForeign('amazon_game_game_fkey');
        });
    }
};
