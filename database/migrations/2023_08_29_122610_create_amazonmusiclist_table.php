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
        Schema::create('amazonmusiclist', function (Blueprint $table) {
            $table->text('asin')->primary();
            $table->text('largeimage');
            $table->text('binding');
            $table->text('genre')->nullable();
            $table->text('productgroup');
            $table->text('producttypename');
            $table->date('releasedate')->nullable();
            $table->integer('runningtime')->nullable();
            $table->text('title');
            $table->text('label')->nullable();
            $table->text('manufacturer')->nullable();
            $table->text('publisher')->nullable();
            $table->text('studio')->nullable();
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
        Schema::dropIfExists('amazonmusiclist');
    }
};
