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
        Schema::table('consumerreviewuser', function (Blueprint $table) {
            $table->foreign(['uid'], 'consumerreviewuser_uid_fkey')->references(['uid'])->on('myuser')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consumerreviewuser', function (Blueprint $table) {
            $table->dropForeign('consumerreviewuser_uid_fkey');
        });
    }
};
