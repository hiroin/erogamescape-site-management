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
        Schema::create('mod_brandofficialinformation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game');
            $table->text('html');
            $table->text('summary');
            $table->text('status');
            $table->timestamp('inserted_timestamp')->useCurrent();
            $table->timestamp('update_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_brandofficialinformation');
    }
};
