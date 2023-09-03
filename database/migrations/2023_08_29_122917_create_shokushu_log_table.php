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
        Schema::create('shokushu_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shokushu_id')->index('shokushu_log_shokushu_id');
            $table->text('ip')->index('shokushu_log_ip');
            $table->text('uid')->nullable()->index('shokushu_log_uid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shokushu_log');
    }
};
