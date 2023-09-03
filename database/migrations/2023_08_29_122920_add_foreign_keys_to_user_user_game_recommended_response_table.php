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
        Schema::table('user_user_game_recommended_response', function (Blueprint $table) {
            $table->foreign(['user_user_game_recommended_id'], 'user_user_game_recommended_re_user_user_game_recommended_i_fkey')->references(['id'])->on('user_user_game_recommended')->onDelete('CASCADE');
            $table->foreign(['response_uid'], 'user_user_game_recommended_response_response_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_user_game_recommended_response', function (Blueprint $table) {
            $table->dropForeign('user_user_game_recommended_re_user_user_game_recommended_i_fkey');
            $table->dropForeign('user_user_game_recommended_response_response_uid_fkey');
        });
    }
};
