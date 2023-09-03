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
        Schema::create('reviewpagelist', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('game')->index();
            $table->integer('reviewpage')->index();
            $table->integer('tokuten')->nullable();
            $table->timestampTz('tourokubi')->nullable()->default('now');
            $table->text('memo')->nullable();
            $table->text('link')->nullable();
            $table->boolean('checked')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviewpagelist');
    }
};
