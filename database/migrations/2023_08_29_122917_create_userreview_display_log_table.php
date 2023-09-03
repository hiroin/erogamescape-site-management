<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('userreview_display_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game')->index('userreview_display_log_game');
            $table->text('uid')->index('userreview_display_log_uid');
            $table->text('ip');
            $table->text('agent')->nullable();
            $table->text('referer')->nullable();
            $table->timestamp('timestamp')->default(DB::raw("('now'::text)::timestamp(6) without time zone"))->index('userreview_display_log_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_display_log');
    }
};
