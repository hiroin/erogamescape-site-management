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
        Schema::table('mod_appearance', function (Blueprint $table) {
            $table->foreign(['game', 'character', 'stage'], 'mod_appearance_game_fkey')->references(['game', 'character', 'stage'])->on('appearance')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mod_appearance', function (Blueprint $table) {
            $table->dropForeign('mod_appearance_game_fkey');
        });
    }
};
