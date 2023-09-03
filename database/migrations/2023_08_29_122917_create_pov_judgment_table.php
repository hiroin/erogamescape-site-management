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
        Schema::create('pov_judgment', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('uid')->index('pov_judgment_uid');
            $table->integer('pov')->index('pov_judgment_pov');
            $table->text('judgment');
            $table->text('hitokoto')->nullable();
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
        Schema::dropIfExists('pov_judgment');
    }
};
