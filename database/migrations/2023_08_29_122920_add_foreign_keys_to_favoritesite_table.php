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
        Schema::table('favoritesite', function (Blueprint $table) {
            $table->foreign(['reviewsite'], 'favoritesite_reviewsite_fkey')->references(['id'])->on('homepagelistmaster');
            $table->foreign(['uid'], 'favoritesite_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favoritesite', function (Blueprint $table) {
            $table->dropForeign('favoritesite_reviewsite_fkey');
            $table->dropForeign('favoritesite_uid_fkey');
        });
    }
};
