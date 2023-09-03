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
        Schema::table('attributegroupsboolean', function (Blueprint $table) {
            $table->foreign(['attribute'], 'attributegroupsboolean_attribute_fkey')->references(['id'])->on('attributelist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['game'], 'attributegroupsboolean_game_fkey')->references(['id'])->on('gamelist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attributegroupsboolean', function (Blueprint $table) {
            $table->dropForeign('attributegroupsboolean_attribute_fkey');
            $table->dropForeign('attributegroupsboolean_game_fkey');
        });
    }
};
