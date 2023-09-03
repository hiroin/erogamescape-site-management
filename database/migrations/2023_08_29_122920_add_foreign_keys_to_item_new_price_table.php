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
        Schema::table('item_new_price', function (Blueprint $table) {
            $table->foreign(['item_store_id'], 'item_new_price_item_store_id_fkey')->references(['id'])->on('item_store')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_new_price', function (Blueprint $table) {
            $table->dropForeign('item_new_price_item_store_id_fkey');
        });
    }
};