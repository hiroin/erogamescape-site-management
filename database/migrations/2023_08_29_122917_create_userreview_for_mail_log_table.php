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
        Schema::create('userreview_for_mail_log', function (Blueprint $table) {
            $table->increments('id');
            $table->text('uid')->index('userreview_for_mail_log_uid');
            $table->integer('game')->index('userreview_for_mail_log_game');
            $table->boolean('tokuten_update')->default(false);
            $table->boolean('hitokoto_update')->default(false);
            $table->boolean('memo_update')->default(false);
            $table->boolean('okazu_tokuten_update')->default(false);
            $table->timestamp('timestamp');

            $table->index(['uid', 'game'], 'userreview_for_mail_log_uid_game');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_for_mail_log');
    }
};
