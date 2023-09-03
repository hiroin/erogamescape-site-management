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
        Schema::create('touhyou2', function (Blueprint $table) {
            $table->text('ip')->primary();
            $table->integer('no');
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
        Schema::dropIfExists('touhyou2');
    }
};
