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
        Schema::table('userreview_with_tag', function (Blueprint $table) {
            $table->foreign(['game'], 'userreview_with_tag_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['tag'], 'userreview_with_tag_tag_fkey')->references(['name'])->on('taglist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['uid'], 'userreview_with_tag_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userreview_with_tag', function (Blueprint $table) {
            $table->dropForeign('userreview_with_tag_game_fkey');
            $table->dropForeign('userreview_with_tag_tag_fkey');
            $table->dropForeign('userreview_with_tag_uid_fkey');
        });
    }
};
