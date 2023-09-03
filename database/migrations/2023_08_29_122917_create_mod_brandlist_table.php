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
        Schema::create('mod_brandlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand')->index('mod_brandlist_brand');
            $table->text('brandname')->nullable();
            $table->text('furigana')->nullable();
            $table->text('url')->nullable();
            $table->text('bikou')->nullable();
            $table->boolean('checked')->nullable()->default(false)->index('mod_brandlist_checked');
            $table->timestamp('timestamp')->nullable()->default('now');
            $table->text('kind')->nullable();
            $table->boolean('lost')->nullable()->default(false);
            $table->boolean('directlink')->nullable()->default(true);
            $table->text('twitter')->nullable();
            $table->integer('erogetrailers')->nullable();
            $table->integer('cien')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_brandlist');
    }
};
