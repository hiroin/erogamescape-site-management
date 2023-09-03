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
        Schema::create('belong_to_gamegroup_list', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gamegroup');
            $table->integer('game');
            $table->boolean('check_add')->default(false);
            $table->boolean('reservation_del')->default(false);
            $table->text('memo')->nullable();

            $table->unique(['gamegroup', 'game'], 'belong_to_gamegroup_list_gamegroup_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('belong_to_gamegroup_list');
    }
};
