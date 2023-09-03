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
        Schema::create('mod_character_alias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_alias')->index();
            $table->text('name');
            $table->text('furigana');
            $table->boolean('netabare')->default(false);
            $table->text('remarks')->default('');
            $table->text('ip');
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('checked')->default(false);
            $table->boolean('reflection')->default(false);
            $table->boolean('delete')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_character_alias');
    }
};
