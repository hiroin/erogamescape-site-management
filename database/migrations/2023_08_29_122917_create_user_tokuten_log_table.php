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
        Schema::create('user_tokuten_log', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->integer('game')->nullable();
            $table->text('uid')->nullable();
            $table->integer('tokuten')->nullable();
            $table->integer('old_tokuten')->nullable();
            $table->text('hitokoto')->nullable();
            $table->timestampTz('tourokubi')->nullable()->default(DB::raw("('now'::text)::timestamp(6) with time zone"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tokuten_log');
    }
};
