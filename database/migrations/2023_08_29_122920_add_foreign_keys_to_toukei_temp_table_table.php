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
        Schema::table('toukei_temp_table', function (Blueprint $table) {
            $table->foreign(['brand_id'], '$1')->references(['id'])->on('brandlist')->onUpdate('CASCADE');
            $table->foreign(['game_id'], 'toukei_temp_table_foreignkey_game_id')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('toukei_temp_table', function (Blueprint $table) {
            $table->dropForeign('$1');
            $table->dropForeign('toukei_temp_table_foreignkey_game_id');
        });
    }
};
