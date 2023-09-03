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
        Schema::table('musicitem_amazon', function (Blueprint $table) {
            $table->foreign(['asin'], 'musicitem_amazon_asin_fkey')->references(['asin'])->on('amazonmusiclist')->onDelete('CASCADE');
            $table->foreign(['musicitem'], 'musicitem_amazon_musicitem_fkey')->references(['id'])->on('musicitemlist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('musicitem_amazon', function (Blueprint $table) {
            $table->dropForeign('musicitem_amazon_asin_fkey');
            $table->dropForeign('musicitem_amazon_musicitem_fkey');
        });
    }
};
