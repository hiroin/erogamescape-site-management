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
        Schema::table('mod_character_alias', function (Blueprint $table) {
            $table->foreign(['character_alias'], 'mod_character_alias_character_alias_fkey')->references(['id'])->on('character_alias')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mod_character_alias', function (Blueprint $table) {
            $table->dropForeign('mod_character_alias_character_alias_fkey');
        });
    }
};
