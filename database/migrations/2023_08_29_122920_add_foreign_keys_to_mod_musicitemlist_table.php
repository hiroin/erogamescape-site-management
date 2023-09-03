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
        Schema::table('mod_musicitemlist', function (Blueprint $table) {
            $table->foreign(['musicitem'], 'mod_musicitemlist_musicitem_fkey')->references(['id'])->on('musicitemlist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mod_musicitemlist', function (Blueprint $table) {
            $table->dropForeign('mod_musicitemlist_musicitem_fkey');
        });
    }
};
