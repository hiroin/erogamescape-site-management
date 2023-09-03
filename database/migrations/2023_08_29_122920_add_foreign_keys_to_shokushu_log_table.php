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
        Schema::table('shokushu_log', function (Blueprint $table) {
            $table->foreign(['shokushu_id'], 'shokushu_log_shokushu_id_fkey')->references(['id'])->on('shokushu')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shokushu_log', function (Blueprint $table) {
            $table->dropForeign('shokushu_log_shokushu_id_fkey');
        });
    }
};
