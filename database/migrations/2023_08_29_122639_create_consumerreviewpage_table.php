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
        Schema::create('consumerreviewpage', function (Blueprint $table) {
            $table->integer('id')->default(0);
            $table->integer('game');
            $table->integer('tokuten')->nullable();
            $table->timestampTz('tourokubi')->nullable()->default('now');
            $table->integer('reviewpage')->index('consumerreviewpage_reviewpage');
            $table->text('memo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumerreviewpage');
    }
};
