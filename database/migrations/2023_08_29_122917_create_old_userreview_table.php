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
        Schema::create('old_userreview', function (Blueprint $table) {
            $table->integer('game');
            $table->text('uid');
            $table->integer('tokuten');
            $table->timestampTz('tourokubi')->nullable()->default('now');
            $table->string('hitokoto', 400)->nullable();
            $table->text('memo')->nullable();
            $table->boolean('netabare')->nullable()->default(true);
            $table->string('hitokoto_tmp', 400)->nullable();

            $table->primary(['game', 'uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('old_userreview');
    }
};
