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
        Schema::create('consumerreviewuser', function (Blueprint $table) {
            $table->integer('id')->default(0);
            $table->integer('game');
            $table->integer('tokuten')->nullable();
            $table->timestampTz('tourokubi')->nullable()->default('now');
            $table->text('uid')->index('consumerreviewuser_uid');
            $table->string('memo_bak', 200)->nullable();
            $table->text('hitokoto')->nullable();
            $table->boolean('netabare')->nullable()->default(true);
            $table->text('memo')->nullable();

            $table->unique(['game', 'uid'], 'consumerreviewuser_game_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumerreviewuser');
    }
};
