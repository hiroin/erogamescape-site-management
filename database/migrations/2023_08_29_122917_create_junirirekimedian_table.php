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
        Schema::create('junirirekimedian', function (Blueprint $table) {
            $table->integer('game')->index();
            $table->date('date')->index();
            $table->integer('count');
            $table->integer('median');
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
        Schema::dropIfExists('junirirekimedian');
    }
};
