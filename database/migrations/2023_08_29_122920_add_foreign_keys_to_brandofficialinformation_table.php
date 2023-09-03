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
        Schema::table('brandofficialinformation', function (Blueprint $table) {
            $table->foreign(['game'], 'brandofficialinformation_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brandofficialinformation', function (Blueprint $table) {
            $table->dropForeign('brandofficialinformation_game_fkey');
        });
    }
};
