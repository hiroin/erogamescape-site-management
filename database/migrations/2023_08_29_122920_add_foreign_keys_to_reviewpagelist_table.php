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
        Schema::table('reviewpagelist', function (Blueprint $table) {
            $table->foreign(['game'], 'reviewpagelist_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['reviewpage'], 'reviewpagelist_reviewpage_fkey')->references(['id'])->on('homepagelistmaster')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviewpagelist', function (Blueprint $table) {
            $table->dropForeign('reviewpagelist_game_fkey');
            $table->dropForeign('reviewpagelist_reviewpage_fkey');
        });
    }
};
