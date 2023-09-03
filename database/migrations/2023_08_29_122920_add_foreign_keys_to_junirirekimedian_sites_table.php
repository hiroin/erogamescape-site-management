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
        Schema::table('junirirekimedian_sites', function (Blueprint $table) {
            $table->foreign(['homepage_id'], 'junirirekimedian_sites_homepage_id_fkey')->references(['id'])->on('homepagelistmaster')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('junirirekimedian_sites', function (Blueprint $table) {
            $table->dropForeign('junirirekimedian_sites_homepage_id_fkey');
        });
    }
};
