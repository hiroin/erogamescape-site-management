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
        Schema::table('itemgroups', function (Blueprint $table) {
            $table->foreign(['item_children'], 'itemgroups_item_children_fkey')->references(['id'])->on('itemlist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['item_parent'], 'itemgroups_item_parent_fkey')->references(['id'])->on('itemlist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itemgroups', function (Blueprint $table) {
            $table->dropForeign('itemgroups_item_children_fkey');
            $table->dropForeign('itemgroups_item_parent_fkey');
        });
    }
};
