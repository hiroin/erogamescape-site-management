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
        Schema::table('old_reviewpagelist', function (Blueprint $table) {
            $table->foreign(['game'], 'old_reviewpagelist_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['reviewpage'], 'old_reviewpagelist_reviewpage_fkey')->references(['id'])->on('homepagelistmaster')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('old_reviewpagelist', function (Blueprint $table) {
            $table->dropForeign('old_reviewpagelist_game_fkey');
            $table->dropForeign('old_reviewpagelist_reviewpage_fkey');
        });
    }
};
