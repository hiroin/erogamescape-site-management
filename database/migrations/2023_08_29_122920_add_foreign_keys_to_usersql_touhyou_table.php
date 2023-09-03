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
        Schema::table('usersql_touhyou', function (Blueprint $table) {
            $table->foreign(['id'], 'usersql_touhyou_id_fkey')->references(['id'])->on('usersql')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['uid'], 'usersql_touhyou_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usersql_touhyou', function (Blueprint $table) {
            $table->dropForeign('usersql_touhyou_id_fkey');
            $table->dropForeign('usersql_touhyou_uid_fkey');
        });
    }
};
