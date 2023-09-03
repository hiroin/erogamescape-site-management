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
        Schema::table('appearance_actor', function (Blueprint $table) {
            $table->foreign(['actor'], 'appearance_actor_actor_fkey')->references(['id'])->on('createrlist');
            $table->foreign(['game', 'character', 'stage'], 'appearance_actor_game_fkey')->references(['game', 'character', 'stage'])->on('appearance')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appearance_actor', function (Blueprint $table) {
            $table->dropForeign('appearance_actor_actor_fkey');
            $table->dropForeign('appearance_actor_game_fkey');
        });
    }
};
