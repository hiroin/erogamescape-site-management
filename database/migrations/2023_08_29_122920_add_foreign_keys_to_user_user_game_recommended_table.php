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
        Schema::table('user_user_game_recommended', function (Blueprint $table) {
            $table->foreign(['game', 'recommender_uid'], 'user_user_game_recommended_game_fkey')->references(['game', 'uid'])->on('userreview')->onUpdate('CASCADE');
            $table->foreign(['uid'], 'user_user_game_recommended_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_user_game_recommended', function (Blueprint $table) {
            $table->dropForeign('user_user_game_recommended_game_fkey');
            $table->dropForeign('user_user_game_recommended_uid_fkey');
        });
    }
};
