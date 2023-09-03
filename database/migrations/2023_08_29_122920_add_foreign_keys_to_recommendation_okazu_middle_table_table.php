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
        Schema::table('recommendation_okazu_middle_table', function (Blueprint $table) {
            $table->foreign(['game_1'], 'recommendation_okazu_middle_table_game_1_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['game_2'], 'recommendation_okazu_middle_table_game_2_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recommendation_okazu_middle_table', function (Blueprint $table) {
            $table->dropForeign('recommendation_okazu_middle_table_game_1_fkey');
            $table->dropForeign('recommendation_okazu_middle_table_game_2_fkey');
        });
    }
};
