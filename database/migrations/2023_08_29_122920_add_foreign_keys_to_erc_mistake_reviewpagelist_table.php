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
        Schema::table('erc_mistake_reviewpagelist', function (Blueprint $table) {
            $table->foreign(['game'], 'erc_mistake_reviewpagelist_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['reviewpage'], 'erc_mistake_reviewpagelist_reviewpage_fkey')->references(['id'])->on('homepagelistmaster')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('erc_mistake_reviewpagelist', function (Blueprint $table) {
            $table->dropForeign('erc_mistake_reviewpagelist_game_fkey');
            $table->dropForeign('erc_mistake_reviewpagelist_reviewpage_fkey');
        });
    }
};
