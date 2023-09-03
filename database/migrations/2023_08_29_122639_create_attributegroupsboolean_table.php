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
        Schema::create('attributegroupsboolean', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('game')->index('attributegroupsboolean_game');
            $table->integer('attribute')->index('attributegroupsboolean_attribut');
            $table->boolean('boolean');
            $table->boolean('lock')->nullable()->default(false);

            $table->unique(['game', 'attribute'], 'attributegroupsboolean_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributegroupsboolean');
    }
};
