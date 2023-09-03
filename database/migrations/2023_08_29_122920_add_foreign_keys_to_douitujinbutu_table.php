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
        Schema::table('douitujinbutu', function (Blueprint $table) {
            $table->foreign(['creater1'], 'douitujinbutu_creater1_fkey')->references(['id'])->on('createrlist');
            $table->foreign(['creater2'], 'douitujinbutu_creater2_fkey')->references(['id'])->on('createrlist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('douitujinbutu', function (Blueprint $table) {
            $table->dropForeign('douitujinbutu_creater1_fkey');
            $table->dropForeign('douitujinbutu_creater2_fkey');
        });
    }
};
