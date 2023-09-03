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
        Schema::create('appearance_actor', function (Blueprint $table) {
            $table->integer('game')->index();
            $table->integer('character')->index();
            $table->integer('stage');
            $table->integer('actor');
            $table->text('ip');
            $table->boolean('lock')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->primary(['game', 'character', 'stage', 'actor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appearance_actor');
    }
};
