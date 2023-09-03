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
        Schema::create('mod_createrlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('creater')->index('mod_createrlist_creater');
            $table->text('name')->nullable();
            $table->text('furigana')->nullable();
            $table->text('title')->nullable();
            $table->text('url')->nullable();
            $table->text('circle')->nullable();
            $table->text('bikou')->nullable();
            $table->boolean('checked')->nullable()->default(false)->index('mod_createrlist_checked');
            $table->timestamp('timestamp')->nullable()->default('now');
            $table->integer('twitter_id')->nullable();
            $table->text('twitter_username')->nullable();
            $table->text('blog')->nullable();
            $table->text('blog_title')->nullable();
            $table->integer('pixiv')->nullable();
            $table->text('ip')->nullable();
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
        Schema::dropIfExists('mod_createrlist');
    }
};
