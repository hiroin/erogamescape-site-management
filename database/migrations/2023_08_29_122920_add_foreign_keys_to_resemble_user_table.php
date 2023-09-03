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
        Schema::table('resemble_user', function (Blueprint $table) {
            $table->foreign(['resemble_uid'], 'resemble_user_resemble_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['uid'], 'resemble_user_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resemble_user', function (Blueprint $table) {
            $table->dropForeign('resemble_user_resemble_uid_fkey');
            $table->dropForeign('resemble_user_uid_fkey');
        });
    }
};
