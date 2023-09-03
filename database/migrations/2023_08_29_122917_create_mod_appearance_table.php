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
        Schema::create('mod_appearance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game')->index();
            $table->integer('character')->index();
            $table->integer('stage')->default(1);
            $table->integer('role');
            $table->integer('order_number')->default(100);
            $table->boolean('netabare')->default(false);
            $table->text('hscene')->default('');
            $table->text('url')->default('');
            $table->text('explanation')->default('');
            $table->text('formal_explanation')->default('');
            $table->text('age')->default('');
            $table->text('bust')->default('');
            $table->text('waist')->default('');
            $table->text('hip')->default('');
            $table->text('height')->default('');
            $table->text('weight')->default('');
            $table->text('cup')->default('');
            $table->text('ip');
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('checked')->default(false);
            $table->boolean('reflection')->default(false);
            $table->text('remarks')->default('');
            $table->boolean('delete')->default(false);
            $table->text('gyutto_image_dir')->default('');
            $table->text('creater')->default('');
            $table->text('getchu_image_dir')->default('');
            $table->text('official_image_dir')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_appearance');
    }
};
