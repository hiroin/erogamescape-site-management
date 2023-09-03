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
        Schema::create('mod_musicitem_othereditionlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('musicitem');
            $table->text('edition');
            $table->text('information')->nullable();
            $table->text('ohp')->nullable();
            $table->text('jan')->nullable();
            $table->text('stocknumber')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('checked')->default(false);
            $table->boolean('reflection')->default(false);
            $table->boolean('delete')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_musicitem_othereditionlist');
    }
};
