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
        Schema::table('povgroups_toukei', function (Blueprint $table) {
            $table->foreign(['game'], 'povgroups_toukei_game_fkey')->references(['id'])->on('gamelist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('povgroups_toukei', function (Blueprint $table) {
            $table->dropForeign('povgroups_toukei_game_fkey');
        });
    }
};
