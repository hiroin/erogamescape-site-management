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
        Schema::table('brandaccount', function (Blueprint $table) {
            $table->foreign(['brand_id'], 'brandaccount_brand_id_fkey')->references(['id'])->on('brandlist')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brandaccount', function (Blueprint $table) {
            $table->dropForeign('brandaccount_brand_id_fkey');
        });
    }
};
