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
        Schema::table('appearance_image_gyutto', function (Blueprint $table) {
            $table->foreign(['game', 'character', 'stage'], 'appearance_image_gyutto_game_fkey')->references(['game', 'character', 'stage'])->on('appearance')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appearance_image_gyutto', function (Blueprint $table) {
            $table->dropForeign('appearance_image_gyutto_game_fkey');
        });
    }
};
