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
        Schema::table('userreview_trial_netabare', function (Blueprint $table) {
            $table->foreign(['game', 'uid'], 'userreview_trial_netabare_game_fkey')->references(['game', 'uid'])->on('userreview')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['game'], 'userreview_trial_netabare_game_fkey1')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['uid'], 'userreview_trial_netabare_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['voter_uid'], 'userreview_trial_netabare_voter_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userreview_trial_netabare', function (Blueprint $table) {
            $table->dropForeign('userreview_trial_netabare_game_fkey');
            $table->dropForeign('userreview_trial_netabare_game_fkey1');
            $table->dropForeign('userreview_trial_netabare_uid_fkey');
            $table->dropForeign('userreview_trial_netabare_voter_uid_fkey');
        });
    }
};
