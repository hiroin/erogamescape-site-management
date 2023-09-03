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
        Schema::create('userreview_netabare', function (Blueprint $table) {
            $table->integer('game')->index('userreview_netabare_game');
            $table->text('uid')->index('userreview_netabare_uid');
            $table->text('voter_uid')->index('userreview_netabare_voter_uid');
            $table->boolean('yes_no');
            $table->timestampTz('timestamp')->nullable()->default('now');
            $table->text('reason')->nullable();

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
        Schema::dropIfExists('userreview_netabare');
    }
};
