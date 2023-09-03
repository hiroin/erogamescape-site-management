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
        Schema::table('povmygroup', function (Blueprint $table) {
            $table->foreign(['pov'], 'povmygroup_pov_fkey')->references(['id'])->on('povlist')->onDelete('CASCADE');
            $table->foreign(['uid'], 'povmygroup_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('povmygroup', function (Blueprint $table) {
            $table->dropForeign('povmygroup_pov_fkey');
            $table->dropForeign('povmygroup_uid_fkey');
        });
    }
};
