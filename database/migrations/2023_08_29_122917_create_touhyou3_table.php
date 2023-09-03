<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('touhyou3', function (Blueprint $table) {
            $table->text('ip')->primary();
            $table->integer('no');
            $table->integer('no2');
            $table->text('memo')->nullable();
            $table->timestampTz('timestamp')->nullable()->default(DB::raw("('now'::text)::timestamp(6) with time zone"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('touhyou3');
    }
};
