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
        Schema::create('itemgroups_userlog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_parent');
            $table->integer('item_children');
            $table->text('uid');
            $table->text('ip');
            $table->text('agent');
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemgroups_userlog');
    }
};
