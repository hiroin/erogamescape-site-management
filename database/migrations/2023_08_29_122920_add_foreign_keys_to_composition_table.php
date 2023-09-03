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
        Schema::table('composition', function (Blueprint $table) {
            $table->foreign(['creater'], 'composition_creater_fkey')->references(['id'])->on('createrlist')->onDelete('CASCADE');
            $table->foreign(['music'], 'composition_music_fkey')->references(['id'])->on('musiclist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('composition', function (Blueprint $table) {
            $table->dropForeign('composition_creater_fkey');
            $table->dropForeign('composition_music_fkey');
        });
    }
};
