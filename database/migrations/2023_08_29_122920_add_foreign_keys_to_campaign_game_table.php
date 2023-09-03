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
        Schema::table('campaign_game', function (Blueprint $table) {
            $table->foreign(['campaign'], 'campaign_game_campaign_fkey')->references(['id'])->on('campaignlist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['game'], 'campaign_game_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campaign_game', function (Blueprint $table) {
            $table->dropForeign('campaign_game_campaign_fkey');
            $table->dropForeign('campaign_game_game_fkey');
        });
    }
};
