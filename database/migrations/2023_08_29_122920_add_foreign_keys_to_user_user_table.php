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
        Schema::table('user_user', function (Blueprint $table) {
            $table->foreign(['uid'], 'user_user_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['voter_uid'], 'user_user_voter_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_user', function (Blueprint $table) {
            $table->dropForeign('user_user_uid_fkey');
            $table->dropForeign('user_user_voter_uid_fkey');
        });
    }
};
