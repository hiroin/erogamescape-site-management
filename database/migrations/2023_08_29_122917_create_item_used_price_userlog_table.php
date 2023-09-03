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
        Schema::create('item_used_price_userlog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item');
            $table->integer('store');
            $table->text('uid');
            $table->text('ip');
            $table->text('agent');
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_used_price_userlog');
    }
};
