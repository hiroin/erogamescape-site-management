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
        Schema::create('appearance_eventimage_gyutto', function (Blueprint $table) {
            $table->integer('game')->index();
            $table->integer('character')->index();
            $table->integer('stage');
            $table->text('eventimage_dir');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->text('ip')->default('');
            $table->boolean('lock')->default(false);

            $table->primary(['game', 'character', 'stage', 'eventimage_dir']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appearance_eventimage_gyutto');
    }
};
