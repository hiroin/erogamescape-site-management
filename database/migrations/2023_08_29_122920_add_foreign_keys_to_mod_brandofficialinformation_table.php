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
        Schema::table('mod_brandofficialinformation', function (Blueprint $table) {
            $table->foreign(['game'], 'mod_brandofficialinformation_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mod_brandofficialinformation', function (Blueprint $table) {
            $table->dropForeign('mod_brandofficialinformation_game_fkey');
        });
    }
};
