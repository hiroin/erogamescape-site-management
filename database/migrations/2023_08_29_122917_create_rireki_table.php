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
        Schema::create('rireki', function (Blueprint $table) {
            $table->integer('game');
            $table->timestampTz('datetime')->index();
            $table->integer('count');
            $table->integer('count_old')->nullable();
            $table->integer('avg');
            $table->integer('avg_old')->nullable();

            $table->primary(['game', 'datetime']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rireki');
    }
};
