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
        Schema::create('mod_shokushu_cancel_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mod_shokushu_id');
            $table->text('ip');
            $table->text('uid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_shokushu_cancel_log');
    }
};
