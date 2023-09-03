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
        Schema::create('shokushu_backup', function (Blueprint $table) {
            $table->integer('id')->nullable()->index();
            $table->integer('game')->index();
            $table->integer('creater')->index();
            $table->integer('shubetu');
            $table->boolean('checked')->nullable();
            $table->text('note')->nullable();
            $table->integer('shubetu_detail')->nullable();
            $table->text('shubetu_detail_name')->nullable();
            $table->text('ip')->nullable();
            $table->timestamp('create_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shokushu_backup');
    }
};
