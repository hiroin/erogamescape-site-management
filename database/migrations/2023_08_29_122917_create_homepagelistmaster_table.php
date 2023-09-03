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
        Schema::create('homepagelistmaster', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('title')->nullable();
            $table->text('furigana')->nullable();
            $table->text('url')->nullable()->unique();
            $table->text('admin')->nullable();
            $table->boolean('tokuten')->nullable()->default(false);
            $table->text('passwd')->nullable();
            $table->boolean('checked')->nullable()->default(true);
            $table->integer('http_response_code')->nullable();
            $table->boolean('reviewsite')->nullable()->default(true);
            $table->integer('passwd_miss_count')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepagelistmaster');
    }
};
