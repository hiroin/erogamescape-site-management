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
        Schema::create('mod_musiclist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('music');
            $table->text('name');
            $table->text('furigana');
            $table->string('playtime')->nullable();
            $table->boolean('vocal');
            $table->text('ohp')->nullable();
            $table->date('releasedate')->nullable();
            $table->integer('erogetrailers')->nullable();
            $table->text('memo')->nullable();
            $table->text('remarks')->nullable();
            $table->text('ip');
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
        Schema::dropIfExists('mod_musiclist');
    }
};
