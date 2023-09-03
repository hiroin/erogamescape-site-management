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
        Schema::table('junirirekimedian', function (Blueprint $table) {
            $table->foreign(['game'], 'junirirekimedian_game_fkey')->references(['id'])->on('gamelist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('junirirekimedian', function (Blueprint $table) {
            $table->dropForeign('junirirekimedian_game_fkey');
        });
    }
};
