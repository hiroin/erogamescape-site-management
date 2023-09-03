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
        Schema::create('povgroups_toukei', function (Blueprint $table) {
            $table->integer('pov')->index('povgroups_toukei_pov');
            $table->integer('game')->index('povgroups_toukei_game');
            $table->char('rank', 1)->index('povgroups_toukei_rank');
            $table->integer('count');

            $table->primary(['game', 'pov', 'rank']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povgroups_toukei');
    }
};
