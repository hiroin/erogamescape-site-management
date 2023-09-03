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
        Schema::create('musicitemlist', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('furigana');
            $table->text('category');
            $table->text('information')->nullable();
            $table->text('ohp')->nullable();
            $table->text('jan')->nullable()->index();
            $table->text('stocknumber')->nullable()->index();
            $table->date('releasedate')->nullable()->index();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicitemlist');
    }
};
