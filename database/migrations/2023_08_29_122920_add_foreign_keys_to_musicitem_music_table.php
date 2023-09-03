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
        Schema::table('musicitem_music', function (Blueprint $table) {
            $table->foreign(['music'], 'musicitem_music_music_fkey')->references(['id'])->on('musiclist')->onDelete('CASCADE');
            $table->foreign(['musicitem'], 'musicitem_music_musicitem_fkey')->references(['id'])->on('musicitemlist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('musicitem_music', function (Blueprint $table) {
            $table->dropForeign('musicitem_music_music_fkey');
            $table->dropForeign('musicitem_music_musicitem_fkey');
        });
    }
};
