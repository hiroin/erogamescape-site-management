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
        Schema::table('povlist_edit_log', function (Blueprint $table) {
            $table->foreign(['pov'], 'povlist_edit_log_pov_fkey')->references(['id'])->on('povlist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('povlist_edit_log', function (Blueprint $table) {
            $table->dropForeign('povlist_edit_log_pov_fkey');
        });
    }
};
