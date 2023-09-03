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
        Schema::table('character_alias', function (Blueprint $table) {
            $table->foreign(['character'], 'character_alias_character_fkey')->references(['id'])->on('characterlist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_alias', function (Blueprint $table) {
            $table->dropForeign('character_alias_character_fkey');
        });
    }
};
