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
        Schema::create('povgroups_lastrun', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->text('uid')->nullable();
            $table->integer('pov')->nullable();
            $table->integer('game')->nullable();
            $table->char('rank', 1)->nullable();
            $table->text('memo')->nullable();
            $table->timestampTz('tourokubi')->nullable();
            $table->boolean('sage')->nullable();
            $table->timestamp('modified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povgroups_lastrun');
    }
};
