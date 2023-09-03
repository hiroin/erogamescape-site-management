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
        Schema::table('itemlist_userlog', function (Blueprint $table) {
            $table->foreign(['itemlist_id'], 'itemlist_userlog_itemlist_id_fkey')->references(['id'])->on('itemlist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itemlist_userlog', function (Blueprint $table) {
            $table->dropForeign('itemlist_userlog_itemlist_id_fkey');
        });
    }
};
