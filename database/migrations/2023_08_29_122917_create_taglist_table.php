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
        Schema::create('taglist', function (Blueprint $table) {
            $table->text('name')->primary();
            $table->text('furigana')->default('未設定');
            $table->timestamp('timestamp')->useCurrent();
            $table->boolean('netabare')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taglist');
    }
};
