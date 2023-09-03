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
        Schema::create('povlist', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->string('title', 100);
            $table->text('comment');
            $table->text('uid')->index('povlist_uid');
            $table->timestampTz('timestamp')->nullable()->default('now');
            $table->timestampTz('tourokubi')->nullable();
            $table->text('furigana')->nullable();
            $table->timestampTz('editingday')->nullable()->default('now');
            $table->boolean('registration')->nullable()->default(false);
            $table->text('system_title')->nullable();
            $table->text('system_group')->nullable()->default('未分類');
            $table->boolean('netabare')->nullable()->default(false);
            $table->integer('number_of_user')->nullable();
            $table->boolean('before')->default(false);
            $table->boolean('before_trial')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povlist');
    }
};
