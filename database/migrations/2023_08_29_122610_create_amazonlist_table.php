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
        Schema::create('amazonlist', function (Blueprint $table) {
            $table->text('asin')->primary();
            $table->text('smallimage')->nullable();
            $table->text('mediumimage')->nullable();
            $table->text('largeimage')->nullable();
            $table->text('binding');
            $table->text('brand')->nullable();
            $table->text('ean')->nullable()->index();
            $table->date('releasedate')->nullable();
            $table->text('title');
            $table->integer('totalnew')->nullable();
            $table->integer('totalused')->nullable();
            $table->integer('totalcollectible')->nullable();
            $table->integer('totalreviews')->nullable();
            $table->integer('totalreviewpages')->nullable();
            $table->text('similarproduct_asin_1')->nullable()->index();
            $table->text('similarproduct_asin_2')->nullable()->index();
            $table->text('similarproduct_asin_3')->nullable()->index();
            $table->text('similarproduct_asin_4')->nullable()->index();
            $table->text('similarproduct_asin_5')->nullable()->index();
            $table->timestamp('last_update_time')->nullable();
            $table->integer('lowestnewprice')->nullable();
            $table->integer('lowestusedprice')->nullable();
            $table->text('detailpageurl')->nullable();

            $table->index(['asin']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amazonlist');
    }
};
