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
        Schema::table('mail_queue_userreview_touhyou_update', function (Blueprint $table) {
            $table->foreign(['uid'], 'mail_queue_userreview_touhyou_update_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mail_queue_userreview_touhyou_update', function (Blueprint $table) {
            $table->dropForeign('mail_queue_userreview_touhyou_update_uid_fkey');
        });
    }
};
