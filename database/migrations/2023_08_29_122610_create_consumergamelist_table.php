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
        Schema::create('consumergamelist', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('gamename');
            $table->text('furigana');
            $table->integer('brandname')->index('consumergamelist_brandname');
            $table->date('sellday')->nullable();
            $table->text('model')->index('consumergamelist_model');
            $table->text('genre')->nullable()->default('GAL');

            $table->unique(['gamename', 'model'], 'consumergamelist_gamename_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumergamelist');
    }
};
