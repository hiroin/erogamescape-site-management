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
        Schema::table('consumerreview', function (Blueprint $table) {
            $table->foreign(['game'], 'consumerreview_game_fkey')->references(['id'])->on('consumergamelist')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consumerreview', function (Blueprint $table) {
            $table->dropForeign('consumerreview_game_fkey');
        });
    }
};
