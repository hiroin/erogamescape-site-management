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
        Schema::create('musiclist', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('furigana');
            $table->string('playtime')->nullable();
            $table->boolean('vocal');
            $table->text('ohp')->nullable();
            $table->date('releasedate')->nullable()->index();
            $table->integer('erogetrailers')->nullable()->index();
            $table->text('memo')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->boolean('user_insert')->default(true);
            $table->boolean('gyutto_check')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musiclist');
    }
};
