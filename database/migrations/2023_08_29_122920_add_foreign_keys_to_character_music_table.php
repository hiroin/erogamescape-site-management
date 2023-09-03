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
        Schema::table('character_music', function (Blueprint $table) {
            $table->foreign(['character'], 'character_music_character_fkey')->references(['id'])->on('characterlist')->onDelete('CASCADE');
            $table->foreign(['music'], 'character_music_music_fkey')->references(['id'])->on('musiclist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_music', function (Blueprint $table) {
            $table->dropForeign('character_music_character_fkey');
            $table->dropForeign('character_music_music_fkey');
        });
    }
};
