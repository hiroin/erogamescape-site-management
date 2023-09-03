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
        Schema::table('support_platform', function (Blueprint $table) {
            $table->foreign(['game'], 'support_platform_game_fkey')->references(['id'])->on('gamelist');
            $table->foreign(['platform'], 'support_platform_platform_fkey')->references(['id'])->on('platformlist');
            $table->foreign(['uid'], 'support_platform_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('support_platform', function (Blueprint $table) {
            $table->dropForeign('support_platform_game_fkey');
            $table->dropForeign('support_platform_platform_fkey');
            $table->dropForeign('support_platform_uid_fkey');
        });
    }
};
