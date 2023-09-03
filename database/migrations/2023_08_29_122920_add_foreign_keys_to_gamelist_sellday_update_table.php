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
        Schema::table('gamelist_sellday_update', function (Blueprint $table) {
            $table->foreign(['game'], 'gamelist_sellday_update_game_fkey')->references(['id'])->on('gamelist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gamelist_sellday_update', function (Blueprint $table) {
            $table->dropForeign('gamelist_sellday_update_game_fkey');
        });
    }
};
