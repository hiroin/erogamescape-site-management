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
        Schema::table('brandname_for_search', function (Blueprint $table) {
            $table->foreign(['brand'], 'brandname_for_serch_brand_fkey')->references(['id'])->on('brandlist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brandname_for_search', function (Blueprint $table) {
            $table->dropForeign('brandname_for_serch_brand_fkey');
        });
    }
};
