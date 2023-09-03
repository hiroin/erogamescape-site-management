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
        Schema::table('appearance', function (Blueprint $table) {
            $table->foreign(['character'], 'appearance_character_fkey')->references(['id'])->on('characterlist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['game'], 'appearance_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['role'], 'appearance_role_fkey')->references(['id'])->on('character_rolelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appearance', function (Blueprint $table) {
            $table->dropForeign('appearance_character_fkey');
            $table->dropForeign('appearance_game_fkey');
            $table->dropForeign('appearance_role_fkey');
        });
    }
};
