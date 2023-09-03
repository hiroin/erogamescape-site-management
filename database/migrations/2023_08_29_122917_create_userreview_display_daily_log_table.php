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
        Schema::create('userreview_display_daily_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game')->index('userreview_display_daily_log_game');
            $table->text('uid')->index('userreview_display_daily_log_uid');
            $table->date('date')->index('userreview_display_daily_log_date');
            $table->integer('count');

            $table->primary(['game', 'uid', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_display_daily_log');
    }
};
