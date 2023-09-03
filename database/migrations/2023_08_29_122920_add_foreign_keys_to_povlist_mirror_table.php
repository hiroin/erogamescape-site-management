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
        Schema::table('povlist_mirror', function (Blueprint $table) {
            $table->foreign(['pov'], 'povlist_mirror_pov_fkey')->references(['id'])->on('povlist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['uid'], 'povlist_mirror_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('povlist_mirror', function (Blueprint $table) {
            $table->dropForeign('povlist_mirror_pov_fkey');
            $table->dropForeign('povlist_mirror_uid_fkey');
        });
    }
};
