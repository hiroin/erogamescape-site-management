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
        Schema::create('consumerreview', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('game')->index('consumerreview_game');
            $table->integer('tokuten')->nullable();
            $table->timestampTz('tourokubi')->nullable()->default('now');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumerreview');
    }
};
