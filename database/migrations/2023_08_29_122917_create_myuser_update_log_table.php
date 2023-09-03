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
        Schema::create('myuser_update_log', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('old_uid');
            $table->text('new_uid');
            $table->timestampTz('timestamp')->nullable()->default('now');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myuser_update_log');
    }
};
