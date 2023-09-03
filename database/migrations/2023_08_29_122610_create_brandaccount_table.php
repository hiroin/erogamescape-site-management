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
        Schema::create('brandaccount', function (Blueprint $table) {
            $table->integer('brand_id')->primary();
            $table->text('name')->index('brandaccount_name');
            $table->text('password');
            $table->text('mail');
            $table->timestamp('lastlogin')->default('1900-01-01 00:00:00');
            $table->text('ip')->default('0.0.0.0');
            $table->integer('password_miss_count')->default(0);

            $table->unique(['name'], 'brandaccount_name_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brandaccount');
    }
};
