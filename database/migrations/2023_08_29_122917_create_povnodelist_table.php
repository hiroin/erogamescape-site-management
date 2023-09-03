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
        Schema::create('povnodelist', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->string('title', 200);
            $table->text('uid')->index('povnodelist_uid');
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
        Schema::dropIfExists('povnodelist');
    }
};
