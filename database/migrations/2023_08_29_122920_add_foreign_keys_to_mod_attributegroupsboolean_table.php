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
        Schema::table('mod_attributegroupsboolean', function (Blueprint $table) {
            $table->foreign(['attribute'], 'mod_attributegroupsboolean_attribute_fkey')->references(['id'])->on('attributelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['game'], 'mod_attributegroupsboolean_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mod_attributegroupsboolean', function (Blueprint $table) {
            $table->dropForeign('mod_attributegroupsboolean_attribute_fkey');
            $table->dropForeign('mod_attributegroupsboolean_game_fkey');
        });
    }
};
