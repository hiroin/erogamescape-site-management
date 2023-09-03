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
        Schema::table('delete_singer', function (Blueprint $table) {
            $table->foreign(['music', 'creater'], 'delete_singer_music_fkey')->references(['music', 'creater'])->on('singer')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delete_singer', function (Blueprint $table) {
            $table->dropForeign('delete_singer_music_fkey');
        });
    }
};
