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
        Schema::create('mod_attributegroupsboolean', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no');
            $table->integer('game')->index('mod_attributegroupsboolean_game');
            $table->integer('attribute')->index('mod_attributegroupsboolean_attribute');
            $table->boolean('boolean');
            $table->boolean('checked')->default(false);
            $table->timestamp('timestamp')->useCurrent();
            $table->text('ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_attributegroupsboolean');
    }
};
