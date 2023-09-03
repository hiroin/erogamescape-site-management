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
        Schema::table('karaoke_joysound', function (Blueprint $table) {
            $table->foreign(['music'], 'karaoke_joysound_music_fkey')->references(['id'])->on('musiclist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('karaoke_joysound', function (Blueprint $table) {
            $table->dropForeign('karaoke_joysound_music_fkey');
        });
    }
};
