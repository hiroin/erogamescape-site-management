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
        Schema::create('junirirekimedian_sites', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->index('junirirekimedian_sites_date');
            $table->text('title');
            $table->text('url')->unique('junirirekimedian_sites_ckeck_url');
            $table->integer('homepage_id')->index('junirirekimedian_sites_homepage_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('junirirekimedian_sites');
    }
};
