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
        Schema::table('delete_arrangement', function (Blueprint $table) {
            $table->foreign(['music', 'creater'], 'delete_arrangement_music_fkey')->references(['music', 'creater'])->on('arrangement')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delete_arrangement', function (Blueprint $table) {
            $table->dropForeign('delete_arrangement_music_fkey');
        });
    }
};
