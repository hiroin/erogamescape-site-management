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
        Schema::create('povlist_mirror_edit_log', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('pov');
            $table->string('title', 100);
            $table->text('comment');
            $table->text('uid');
            $table->timestampTz('timestamp');
            $table->boolean('netabare');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povlist_mirror_edit_log');
    }
};
