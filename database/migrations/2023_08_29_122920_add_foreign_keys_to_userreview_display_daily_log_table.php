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
        Schema::table('userreview_display_daily_log', function (Blueprint $table) {
            $table->foreign(['game', 'uid'], 'userreview_display_daily_log_game_fkey')->references(['game', 'uid'])->on('userreview')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userreview_display_daily_log', function (Blueprint $table) {
            $table->dropForeign('userreview_display_daily_log_game_fkey');
        });
    }
};
