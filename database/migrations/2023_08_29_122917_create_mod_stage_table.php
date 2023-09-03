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
        Schema::create('mod_stage', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game')->index();
            $table->integer('stage');
            $table->text('name');
            $table->text('explanation')->default('');
            $table->text('ip');
            $table->boolean('checked')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->text('remark')->default('');
            $table->boolean('reflection')->default(false);
            $table->integer('order_number')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_stage');
    }
};
