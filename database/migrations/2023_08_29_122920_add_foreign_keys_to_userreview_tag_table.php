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
        Schema::table('userreview_tag', function (Blueprint $table) {
            $table->foreign(['game'], 'userreview_tag_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['uid'], 'userreview_tag_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userreview_tag', function (Blueprint $table) {
            $table->dropForeign('userreview_tag_game_fkey');
            $table->dropForeign('userreview_tag_uid_fkey');
        });
    }
};
