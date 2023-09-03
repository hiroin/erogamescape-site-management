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
        Schema::create('characterlist', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('furigana');
            $table->text('sex');
            $table->text('true_sex');
            $table->text('bloodtype');
            $table->text('birthday');
            $table->text('explanation')->default('');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->text('ragna')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characterlist');
    }
};
