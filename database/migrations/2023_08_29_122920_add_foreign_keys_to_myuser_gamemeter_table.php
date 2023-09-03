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
        Schema::table('myuser_gamemeter', function (Blueprint $table) {
            $table->foreign(['uid'], 'myuser_gamemeter_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('myuser_gamemeter', function (Blueprint $table) {
            $table->dropForeign('myuser_gamemeter_uid_fkey');
        });
    }
};
