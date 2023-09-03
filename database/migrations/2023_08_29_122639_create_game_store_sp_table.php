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
        Schema::create('game_store_sp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store')->index();
            $table->integer('game')->index();
            $table->text('store_id_1')->nullable();
            $table->text('store_id_2')->nullable();
            $table->text('itemname')->nullable();
            $table->date('sellday')->nullable();
            $table->integer('price')->nullable();
            $table->date('price_date')->nullable();
            $table->timestamp('timestamp')->useCurrent();

            $table->primary(['store', 'game']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_store_sp');
    }
};
