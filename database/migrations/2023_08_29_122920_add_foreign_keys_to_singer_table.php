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
        Schema::table('singer', function (Blueprint $table) {
            $table->foreign(['creater'], 'singer_creater_fkey')->references(['id'])->on('createrlist')->onDelete('CASCADE');
            $table->foreign(['music'], 'singer_music_fkey')->references(['id'])->on('musiclist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('singer', function (Blueprint $table) {
            $table->dropForeign('singer_creater_fkey');
            $table->dropForeign('singer_music_fkey');
        });
    }
};
