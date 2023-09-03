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
        Schema::create('itemlist', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('jan')->default('0')->index();
            $table->integer('fixedprice')->default(0);
            $table->text('sellform')->default('PKG');
            $table->text('edition')->default('Limited');
            $table->text('media')->nullable();
            $table->text('memo')->nullable();
            $table->date('releasedate')->default('3000-01-01')->index();
            $table->timestamp('timestamp')->useCurrent();
            $table->integer('fixedprice_after_taxes')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemlist');
    }
};
