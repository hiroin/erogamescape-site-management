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
        Schema::create('log_insert', function (Blueprint $table) {
            $table->text('syubetu');
            $table->text('name');
            $table->timestampTz('timestamp')->nullable()->default(DB::raw("('now'::text)::timestamp(6) with time zone"));
            $table->boolean('checked')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_insert');
    }
};
