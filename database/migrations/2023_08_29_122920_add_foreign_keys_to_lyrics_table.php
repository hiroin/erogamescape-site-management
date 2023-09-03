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
        Schema::table('lyrics', function (Blueprint $table) {
            $table->foreign(['creater'], 'lyrics_creater_fkey')->references(['id'])->on('createrlist')->onDelete('CASCADE');
            $table->foreign(['music'], 'lyrics_music_fkey')->references(['id'])->on('musiclist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lyrics', function (Blueprint $table) {
            $table->dropForeign('lyrics_creater_fkey');
            $table->dropForeign('lyrics_music_fkey');
        });
    }
};
