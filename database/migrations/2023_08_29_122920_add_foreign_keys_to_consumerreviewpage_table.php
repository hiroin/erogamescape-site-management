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
        Schema::table('consumerreviewpage', function (Blueprint $table) {
            $table->foreign(['reviewpage'], 'consumerreviewpage_reviewpage_fkey')->references(['id'])->on('homepagelistmaster')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consumerreviewpage', function (Blueprint $table) {
            $table->dropForeign('consumerreviewpage_reviewpage_fkey');
        });
    }
};
