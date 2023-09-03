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
        Schema::create('usersql_touhyou', function (Blueprint $table) {
            $table->integer('id');
            $table->text('uid')->index('usersql_touhyou_uid');
            $table->text('hitokoto')->nullable();
            $table->integer('rank')->default(10);
            $table->timestampTz('timestamp')->nullable()->default('now');

            $table->primary(['id', 'uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersql_touhyou');
    }
};
