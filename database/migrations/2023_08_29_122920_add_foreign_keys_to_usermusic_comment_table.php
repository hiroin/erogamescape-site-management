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
        Schema::table('usermusic_comment', function (Blueprint $table) {
            $table->foreign(['music'], 'usermusic_comment_music_fkey')->references(['id'])->on('musiclist')->onDelete('CASCADE');
            $table->foreign(['uid'], 'usermusic_comment_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usermusic_comment', function (Blueprint $table) {
            $table->dropForeign('usermusic_comment_music_fkey');
            $table->dropForeign('usermusic_comment_uid_fkey');
        });
    }
};
