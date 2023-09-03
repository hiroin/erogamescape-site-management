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
        Schema::create('platformlist', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->integer('sort')->nullable();
            $table->text('model')->nullable()->default('PC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platformlist');
    }
};
