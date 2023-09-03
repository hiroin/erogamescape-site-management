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
        Schema::create('erc_mistake_reviewpagelist', function (Blueprint $table) {
            $table->integer('game')->index('game_erc_mistake_reviewpagelis_index');
            $table->integer('reviewpage')->index('reviewpage_erc_mistake_reviewpagelis_index');

            $table->primary(['game', 'reviewpage']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('erc_mistake_reviewpagelist');
    }
};
