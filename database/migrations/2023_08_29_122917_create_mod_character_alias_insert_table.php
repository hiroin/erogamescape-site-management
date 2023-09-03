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
        Schema::create('mod_character_alias_insert', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character');
            $table->text('name');
            $table->text('furigana');
            $table->boolean('netabare')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('checked')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_character_alias_insert');
    }
};
