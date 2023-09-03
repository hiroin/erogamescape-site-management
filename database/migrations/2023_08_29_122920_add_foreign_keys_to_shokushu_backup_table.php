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
        Schema::table('shokushu_backup', function (Blueprint $table) {
            $table->foreign(['creater'], 'shokushu_backup_creater_fkey')->references(['id'])->on('createrlist');
            $table->foreign(['game'], 'shokushu_backup_game_fkey')->references(['id'])->on('gamelist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shokushu_backup', function (Blueprint $table) {
            $table->dropForeign('shokushu_backup_creater_fkey');
            $table->dropForeign('shokushu_backup_game_fkey');
        });
    }
};
