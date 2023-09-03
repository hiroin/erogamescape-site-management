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
        Schema::table('mod_characterlist', function (Blueprint $table) {
            $table->foreign(['character'], 'mod_characterlist_character_fkey')->references(['id'])->on('characterlist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mod_characterlist', function (Blueprint $table) {
            $table->dropForeign('mod_characterlist_character_fkey');
        });
    }
};
