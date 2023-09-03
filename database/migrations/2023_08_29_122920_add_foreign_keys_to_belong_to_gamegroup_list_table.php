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
        Schema::table('belong_to_gamegroup_list', function (Blueprint $table) {
            $table->foreign(['game'], 'belong_to_gamegroup_list_game_fkey')->references(['id'])->on('gamelist')->onDelete('CASCADE');
            $table->foreign(['gamegroup'], 'belong_to_gamegroup_list_gamegroup_fkey')->references(['id'])->on('gamegrouplist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('belong_to_gamegroup_list', function (Blueprint $table) {
            $table->dropForeign('belong_to_gamegroup_list_game_fkey');
            $table->dropForeign('belong_to_gamegroup_list_gamegroup_fkey');
        });
    }
};
