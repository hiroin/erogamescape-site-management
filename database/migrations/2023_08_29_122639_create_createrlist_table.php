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
        Schema::create('createrlist', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('name');
            $table->text('furigana');
            $table->text('title')->nullable();
            $table->text('url')->nullable();
            $table->text('circle')->nullable();
            $table->integer('betumei')->nullable();
            $table->boolean('checked')->nullable()->default(false);
            $table->text('twitter_username')->nullable();
            $table->integer('twitter_id')->nullable();
            $table->integer('http_response_code')->nullable();
            $table->text('blog')->nullable();
            $table->integer('pixiv')->nullable();
            $table->text('blog_title')->nullable();
            $table->text('facebook')->nullable();
            $table->integer('syosetu')->nullable();
            $table->text('syosetux')->nullable();
            $table->integer('cien')->nullable();
            $table->integer('fantia')->nullable();
            $table->text('pixivfanbox')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('createrlist');
    }
};
