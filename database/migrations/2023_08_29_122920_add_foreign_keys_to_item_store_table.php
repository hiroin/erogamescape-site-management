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
        Schema::table('item_store', function (Blueprint $table) {
            $table->foreign(['item'], 'item_store_item_fkey')->references(['id'])->on('itemlist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['store'], 'item_store_store_fkey')->references(['id'])->on('storelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_store', function (Blueprint $table) {
            $table->dropForeign('item_store_item_fkey');
            $table->dropForeign('item_store_store_fkey');
        });
    }
};
