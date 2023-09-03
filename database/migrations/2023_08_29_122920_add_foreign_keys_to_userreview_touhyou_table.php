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
        Schema::table('userreview_touhyou', function (Blueprint $table) {
            $table->foreign(['game', 'uid'], 'userreview_touhyou_game_uid_fkey')->references(['game', 'uid'])->on('userreview')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['voter_uid'], 'userreview_touhyou_voter_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userreview_touhyou', function (Blueprint $table) {
            $table->dropForeign('userreview_touhyou_game_uid_fkey');
            $table->dropForeign('userreview_touhyou_voter_uid_fkey');
        });
    }
};
