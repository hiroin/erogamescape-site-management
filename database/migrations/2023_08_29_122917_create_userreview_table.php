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
        Schema::create('userreview', function (Blueprint $table) {
            $table->integer('game')->index('userreview_game');
            $table->text('uid')->index('userreview_uid');
            $table->integer('tokuten')->nullable()->index('userreview_tokuten');
            $table->timestampTz('tourokubi')->nullable()->index('userreview_tourokubi');
            $table->string('hitokoto', 400)->nullable();
            $table->text('memo')->nullable();
            $table->boolean('netabare')->nullable()->default(true);
            $table->integer('id')->default(0)->index('userreview_id');
            $table->boolean('giveup')->nullable()->default(false);
            $table->boolean('possession')->nullable()->default(false);
            $table->boolean('play')->nullable()->default(false);
            $table->boolean('reserve')->nullable()->default(false);
            $table->text('outline')->nullable();
            $table->text('before_hitokoto')->nullable();
            $table->integer('before_tokuten')->nullable();
            $table->timestamp('before_tourokubi')->nullable()->index('userreview_before_tourokubi');
            $table->string('outline_hitokoto', 400)->nullable();
            $table->boolean('display')->nullable()->default(false);
            $table->timestamp('play_tourokubi')->nullable()->index('userreview_play_tourokubi');
            $table->boolean('outline_netabare')->nullable()->default(false);
            $table->timestamp('outline_tourokubi')->nullable();
            $table->integer('display_unique_count')->nullable()->index('userreview_display_unique_count');
            $table->boolean('sage')->nullable()->default(false);
            $table->text('before_purchase_will')->nullable();
            $table->boolean('before_sage')->nullable()->default(false);
            $table->integer('total_play_time')->nullable();
            $table->integer('time_before_understanding_fun')->nullable();
            $table->integer('okazu_tokuten')->nullable()->default(-999);
            $table->text('trial_version_hitokoto')->nullable();
            $table->boolean('trial_version_hitokoto_sage')->nullable()->default(false);
            $table->timestamp('trial_version_hitokoto_tourokubi')->nullable()->index('userreview_trial_version_hitokoto_tourokubi');
            $table->timestamp('timestamp')->nullable()->useCurrent();
            $table->timestamp('modified')->nullable()->useCurrent()->index();

            $table->primary(['game', 'uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview');
    }
};
