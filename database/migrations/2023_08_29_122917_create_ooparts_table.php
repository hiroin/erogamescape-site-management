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
        Schema::create('ooparts', function (Blueprint $table) {
            $table->text('id')->primary();
            $table->text('gamename');
            $table->timestampTz('release_date')->default('2020-04-24 00:00:00+09')->index();
            $table->timestampTz('closing_date')->default('2200-01-01 00:00:00+09')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ooparts');
    }
};
