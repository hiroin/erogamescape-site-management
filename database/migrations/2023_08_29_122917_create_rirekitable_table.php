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
        Schema::create('rirekitable', function (Blueprint $table) {
            $table->date('koushinbi');
            $table->integer('game');
            $table->integer('median')->nullable();
            $table->integer('median2')->nullable();
            $table->integer('average')->nullable();
            $table->integer('average2')->nullable();
            $table->integer('count')->nullable();
            $table->integer('count2')->nullable();

            $table->primary(['koushinbi', 'game']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rirekitable');
    }
};
