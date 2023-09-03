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
        Schema::create('old_reviewpagelist', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('game');
            $table->integer('reviewpage');
            $table->integer('tokuten')->nullable();
            $table->timestampTz('tourokubi')->nullable()->default('now');
            $table->text('memo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('old_reviewpagelist');
    }
};
