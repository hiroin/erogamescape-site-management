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
        Schema::create('userreview_touhyou', function (Blueprint $table) {
            $table->integer('game')->index('userreview_touhyou_game');
            $table->text('uid')->index('userreview_touhyou_uid');
            $table->text('voter_uid')->index('userreview_touhyou_voter_uid');
            $table->text('hitokoto')->nullable();
            $table->timestampTz('timestamp')->nullable()->default('now');
            $table->boolean('sage')->nullable()->default(false);

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
        Schema::dropIfExists('userreview_touhyou');
    }
};
