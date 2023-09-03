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
        Schema::create('shokushu', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('game')->index();
            $table->integer('creater')->index();
            $table->integer('shubetu')->index();
            $table->boolean('checked')->nullable()->default(false);
            $table->text('note')->nullable();
            $table->integer('shubetu_detail')->nullable();
            $table->text('shubetu_detail_name')->nullable();
            $table->text('ip')->nullable();
            $table->timestamp('timestamp')->nullable()->useCurrent();
            $table->integer('sort_num')->nullable();

            $table->unique(['creater', 'game', 'shubetu'], 'creater_game_shubetu_unique');
            $table->unique(['game', 'creater', 'shubetu'], 'shokushu_check');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shokushu');
    }
};
