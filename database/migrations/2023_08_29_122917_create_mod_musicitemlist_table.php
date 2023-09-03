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
        Schema::create('mod_musicitemlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('musicitem');
            $table->text('name');
            $table->text('furigana');
            $table->text('category');
            $table->text('media')->nullable();
            $table->text('information')->nullable();
            $table->text('ohp')->nullable();
            $table->text('jan')->nullable();
            $table->text('stocknumber')->nullable();
            $table->date('releasedate')->nullable();
            $table->text('remarks')->nullable();
            $table->integer('gyutto')->nullable();
            $table->text('asin')->nullable();
            $table->text('ip');
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('checked')->default(false);
            $table->boolean('reflection')->default(false);
            $table->boolean('delete')->default(false);
            $table->text('dmm_dl')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_musicitemlist');
    }
};
