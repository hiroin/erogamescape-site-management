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
        Schema::create('povgroups_before', function (Blueprint $table) {
            $table->increments('id');
            $table->text('uid')->index('povgroups_before_uid');
            $table->integer('pov')->index('povgroups_before_pov');
            $table->integer('game')->index('povgroups_before_game');
            $table->char('rank', 1);
            $table->text('memo')->nullable();
            $table->timestamp('tourokubi')->useCurrent();
            $table->boolean('sage')->default(false);

            $table->unique(['game', 'uid', 'pov'], 'povgroups_before_game_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povgroups_before');
    }
};
