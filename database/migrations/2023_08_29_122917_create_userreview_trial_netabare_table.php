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
        Schema::create('userreview_trial_netabare', function (Blueprint $table) {
            $table->integer('game')->index('userreview_trial_netabare_game');
            $table->text('uid')->index('userreview_trial_netabare_uid');
            $table->text('voter_uid')->index('userreview_trial_netabare_voter_uid');
            $table->boolean('yes_no');
            $table->timestamp('timestamp')->default('2010-11-06 18:18:46.66991');

            $table->primary(['uid', 'game', 'voter_uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_trial_netabare');
    }
};
