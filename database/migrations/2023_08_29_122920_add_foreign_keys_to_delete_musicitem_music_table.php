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
        Schema::table('delete_musicitem_music', function (Blueprint $table) {
            $table->foreign(['music', 'musicitem'], 'delete_musicitem_music_music_fkey')->references(['music', 'musicitem'])->on('musicitem_music')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delete_musicitem_music', function (Blueprint $table) {
            $table->dropForeign('delete_musicitem_music_music_fkey');
        });
    }
};
