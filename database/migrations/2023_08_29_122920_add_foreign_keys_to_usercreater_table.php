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
        Schema::table('usercreater', function (Blueprint $table) {
            $table->foreign(['creater'], 'usercreater_creater_fkey')->references(['id'])->on('createrlist')->onUpdate('CASCADE');
            $table->foreign(['uid'], 'usercreater_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usercreater', function (Blueprint $table) {
            $table->dropForeign('usercreater_creater_fkey');
            $table->dropForeign('usercreater_uid_fkey');
        });
    }
};
