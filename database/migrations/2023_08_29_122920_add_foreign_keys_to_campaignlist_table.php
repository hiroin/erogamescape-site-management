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
        Schema::table('campaignlist', function (Blueprint $table) {
            $table->foreign(['store'], 'campaignlist_store_fkey')->references(['id'])->on('storelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campaignlist', function (Blueprint $table) {
            $table->dropForeign('campaignlist_store_fkey');
        });
    }
};
