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
        Schema::table('povgroups_before', function (Blueprint $table) {
            $table->foreign(['game'], 'povgroups_before_game_fkey')->references(['id'])->on('gamelist')->onDelete('CASCADE');
            $table->foreign(['pov'], 'povgroups_before_pov_fkey')->references(['id'])->on('povlist')->onDelete('CASCADE');
            $table->foreign(['uid'], 'povgroups_before_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('povgroups_before', function (Blueprint $table) {
            $table->dropForeign('povgroups_before_game_fkey');
            $table->dropForeign('povgroups_before_pov_fkey');
            $table->dropForeign('povgroups_before_uid_fkey');
        });
    }
};
