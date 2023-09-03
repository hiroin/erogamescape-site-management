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
        Schema::create('mod_game_music', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('music');
            $table->integer('game');
            $table->text('category');
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('checked')->default(false);
            $table->boolean('reflection')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_game_music');
    }
};
