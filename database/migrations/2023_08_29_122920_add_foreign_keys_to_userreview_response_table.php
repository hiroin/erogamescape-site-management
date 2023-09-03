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
        Schema::table('userreview_response', function (Blueprint $table) {
            $table->foreign(['game', 'uid'], 'userreview_response_game_fkey')->references(['game', 'uid'])->on('userreview')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['response_uid'], 'userreview_response_response_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userreview_response', function (Blueprint $table) {
            $table->dropForeign('userreview_response_game_fkey');
            $table->dropForeign('userreview_response_response_uid_fkey');
        });
    }
};
