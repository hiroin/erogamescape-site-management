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
        Schema::create('junirirekiavgtenpersent', function (Blueprint $table) {
            $table->integer('game');
            $table->date('date');
            $table->float('avg', 0, 0);
            $table->integer('count');
            $table->integer('junni')->nullable();
            $table->integer('junni_old')->nullable();

            $table->primary(['game', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('junirirekiavgtenpersent');
    }
};
