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
        Schema::create('userreview_response', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('game')->index('userreview_response_game');
            $table->text('uid')->index('userreview_response_uid');
            $table->timestampTz('timestamp');
            $table->text('comment');
            $table->text('response_uid')->index('userreview_response_response_ui');
            $table->boolean('sage')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_response');
    }
};
