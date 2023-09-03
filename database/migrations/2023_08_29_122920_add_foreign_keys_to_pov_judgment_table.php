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
        Schema::table('pov_judgment', function (Blueprint $table) {
            $table->foreign(['pov'], 'pov_judgment_pov_fkey')->references(['id'])->on('povlist')->onUpdate('CASCADE');
            $table->foreign(['uid'], 'pov_judgment_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pov_judgment', function (Blueprint $table) {
            $table->dropForeign('pov_judgment_pov_fkey');
            $table->dropForeign('pov_judgment_uid_fkey');
        });
    }
};
