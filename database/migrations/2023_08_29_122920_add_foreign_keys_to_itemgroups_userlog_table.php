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
        Schema::table('itemgroups_userlog', function (Blueprint $table) {
            $table->foreign(['item_parent', 'item_children'], 'itemgroups_userlog_item_parent_fkey')->references(['item_parent', 'item_children'])->on('itemgroups')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itemgroups_userlog', function (Blueprint $table) {
            $table->dropForeign('itemgroups_userlog_item_parent_fkey');
        });
    }
};
