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
        Schema::create('brandaccountloginlog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->text('name');
            $table->timestamp('timestamp');
            $table->text('ip');
            $table->text('host')->default('');
            $table->text('agent');
            $table->text('note')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brandaccountloginlog');
    }
};
