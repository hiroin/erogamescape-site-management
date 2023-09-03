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
        Schema::create('item_store', function (Blueprint $table) {
            $table->integer('item')->index();
            $table->integer('store')->index();
            $table->text('id_of_store')->index();
            $table->text('genre_1')->nullable();
            $table->text('genre_2')->nullable();
            $table->text('privilege_content')->nullable();
            $table->increments('id');
            $table->boolean('privilege')->default(false);

            $table->unique(['item', 'store', 'privilege', 'id_of_store'], 'item_store_unique1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_store');
    }
};
