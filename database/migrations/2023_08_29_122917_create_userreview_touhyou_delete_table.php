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
        Schema::create('userreview_touhyou_delete', function (Blueprint $table) {
            $table->integer('game');
            $table->text('uid');
            $table->text('voter_uid');
            $table->text('hitokoto')->nullable();
            $table->timestamp('timestamp');
            $table->timestamp('timestamp_deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_touhyou_delete');
    }
};
