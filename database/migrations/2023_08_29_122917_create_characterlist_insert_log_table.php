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
        Schema::create('characterlist_insert_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character');
            $table->timestamp('created_at')->useCurrent();
            $table->text('ip');
            $table->text('uid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characterlist_insert_log');
    }
};
