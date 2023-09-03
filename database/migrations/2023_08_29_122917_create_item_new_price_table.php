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
        Schema::create('item_new_price', function (Blueprint $table) {
            $table->integer('item_store_id');
            $table->integer('price');
            $table->timestamp('timestamp')->useCurrent();

            $table->primary(['item_store_id', 'timestamp']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_new_price');
    }
};
