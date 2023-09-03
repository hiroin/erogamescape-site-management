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
        Schema::create('itemgroups', function (Blueprint $table) {
            $table->integer('item_parent')->index();
            $table->integer('item_children')->index('itemgroups_item_children_game_index');
            $table->text('memo')->nullable();

            $table->primary(['item_parent', 'item_children']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemgroups');
    }
};
