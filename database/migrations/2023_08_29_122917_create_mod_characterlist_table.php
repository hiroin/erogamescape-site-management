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
        Schema::create('mod_characterlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character')->index();
            $table->text('name');
            $table->text('furigana');
            $table->text('sex');
            $table->text('true_sex');
            $table->text('bloodtype');
            $table->text('birthday');
            $table->text('explanation')->default('');
            $table->text('remarks')->default('');
            $table->text('ip');
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('checked')->default(false);
            $table->boolean('reflection')->default(false);
            $table->boolean('delete')->default(false);
            $table->text('ragna')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_characterlist');
    }
};
