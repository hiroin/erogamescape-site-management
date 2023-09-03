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
        Schema::table('povgroups_touhyou', function (Blueprint $table) {
            $table->foreign(['pg_id'], 'povgroups_touhyou_pg_id_fkey')->references(['id'])->on('povgroups')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['voter_uid'], 'povgroups_touhyou_voter_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('povgroups_touhyou', function (Blueprint $table) {
            $table->dropForeign('povgroups_touhyou_pg_id_fkey');
            $table->dropForeign('povgroups_touhyou_voter_uid_fkey');
        });
    }
};
