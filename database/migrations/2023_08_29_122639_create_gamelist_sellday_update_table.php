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
        Schema::create('gamelist_sellday_update', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game')->index('gamelist_sellday_update_game');
            $table->date('sellday_old');
            $table->date('sellday_new');
            $table->timestamp('timestamp')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamelist_sellday_update');
    }
};
