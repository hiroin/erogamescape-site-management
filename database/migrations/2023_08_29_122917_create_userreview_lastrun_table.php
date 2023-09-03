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
        Schema::create('userreview_lastrun', function (Blueprint $table) {
            $table->integer('game')->nullable();
            $table->text('uid')->nullable();
            $table->integer('tokuten')->nullable();
            $table->timestampTz('tourokubi')->nullable();
            $table->string('hitokoto', 400)->nullable();
            $table->text('memo')->nullable();
            $table->boolean('netabare')->nullable();
            $table->integer('id')->nullable();
            $table->boolean('giveup')->nullable();
            $table->boolean('possession')->nullable();
            $table->boolean('play')->nullable();
            $table->boolean('reserve')->nullable();
            $table->text('outline')->nullable();
            $table->text('before_hitokoto')->nullable();
            $table->integer('before_tokuten')->nullable();
            $table->timestamp('before_tourokubi')->nullable();
            $table->string('outline_hitokoto', 400)->nullable();
            $table->boolean('display')->nullable();
            $table->timestamp('play_tourokubi')->nullable();
            $table->boolean('outline_netabare')->nullable();
            $table->timestamp('outline_tourokubi')->nullable();
            $table->integer('display_unique_count')->nullable();
            $table->boolean('sage')->nullable();
            $table->text('before_purchase_will')->nullable();
            $table->boolean('before_sage')->nullable();
            $table->integer('total_play_time')->nullable();
            $table->integer('time_before_understanding_fun')->nullable();
            $table->integer('okazu_tokuten')->nullable();
            $table->text('trial_version_hitokoto')->nullable();
            $table->boolean('trial_version_hitokoto_sage')->nullable();
            $table->timestamp('trial_version_hitokoto_tourokubi')->nullable();
            $table->timestamp('timestamp')->nullable();
            $table->timestamp('modified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_lastrun');
    }
};
