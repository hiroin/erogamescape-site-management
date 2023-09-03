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
        Schema::create('povgroups', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('uid')->index('povgroups_uid');
            $table->integer('pov')->index('povgroups_pov');
            $table->integer('game')->index('povgroups_game');
            $table->char('rank', 1);
            $table->text('memo')->nullable();
            $table->timestampTz('tourokubi')->nullable()->useCurrent()->index('povgroups_tourokubi');
            $table->boolean('sage')->nullable()->default(false);
            $table->timestamp('modified')->nullable()->useCurrent()->index();

            $table->unique(['game', 'uid', 'pov'], 'povgroups_game_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povgroups');
    }
};
