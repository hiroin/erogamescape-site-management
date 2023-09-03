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
        Schema::create('brandlist', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('brandname');
            $table->text('brandfurigana');
            $table->text('makername')->nullable();
            $table->text('makerfurigana')->nullable();
            $table->text('url')->nullable();
            $table->boolean('checked')->nullable()->default(false);
            $table->text('kind')->nullable()->default('CORPORATION');
            $table->boolean('lost')->nullable()->default(false);
            $table->boolean('directlink')->nullable()->default(true);
            $table->integer('median')->nullable();
            $table->integer('http_response_code')->nullable();
            $table->text('twitter')->nullable();
            $table->text('twitter_data_widget_id')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('brandlist');
    }
};
