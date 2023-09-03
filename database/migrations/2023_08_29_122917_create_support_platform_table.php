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
        Schema::create('support_platform', function (Blueprint $table) {
            $table->text('uid');
            $table->integer('game');
            $table->integer('platform');
            $table->integer('operation');
            $table->text('memo')->nullable();
            $table->timestamp('timestamp')->useCurrent();

            $table->primary(['uid', 'game', 'platform']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_platform');
    }
};
