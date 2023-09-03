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
        Schema::create('myuser_gamemeter', function (Blueprint $table) {
            $table->text('uid')->unique('myuser_gamemeter_uid_key');
            $table->integer('gamemeter')->unique('myuser_gamemeter_gamemeter_key');
            $table->boolean('active_flag')->default(false);
            $table->boolean('get_all_flag')->default(false);
            $table->boolean('get_rss_flag')->default(false);
            $table->timestamp('last_get_all')->default('1900-01-01 00:00:00');
            $table->timestamp('last_get_rss')->default('1900-01-01 00:00:00');
            $table->timestamp('timestamp')->useCurrent();

            $table->primary(['uid', 'gamemeter']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myuser_gamemeter');
    }
};
