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
        Schema::create('user_user_game_recommended', function (Blueprint $table) {
            $table->increments('id');
            $table->text('uid');
            $table->integer('game');
            $table->text('recommender_uid');
            $table->text('comment');
            $table->timestamp('timestamp')->useCurrent()->index('user_user_game_recommended_timestamp');
            $table->timestamp('update_timestamp')->useCurrent()->index('user_user_game_recommended_update_timestamp');
            $table->boolean('checked')->default(false);

            $table->unique(['uid', 'recommender_uid', 'game'], 'user_user_game_recommended_uid_recommender_uid_game_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_user_game_recommended');
    }
};
