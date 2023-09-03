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
        Schema::table('junirirekiavgtenpersent', function (Blueprint $table) {
            $table->foreign(['game'], 'junirirekiavgtenpersent_game_fkey')->references(['id'])->on('gamelist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('junirirekiavgtenpersent', function (Blueprint $table) {
            $table->dropForeign('junirirekiavgtenpersent_game_fkey');
        });
    }
};
