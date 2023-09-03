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
        Schema::create('ooparts_game', function (Blueprint $table) {
            $table->text('ooparts')->index();
            $table->integer('game')->index();
            $table->timestampTz('timestamp')->useCurrent();

            $table->primary(['ooparts', 'game']);
            $table->unique(['game']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ooparts_game');
    }
};
