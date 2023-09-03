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
        Schema::create('userreview_tag', function (Blueprint $table) {
            $table->text('uid')->index('userreview_tag_uid');
            $table->integer('game')->index('userreview_tag_game');
            $table->text('tags');
            $table->timestamp('timestamp')->useCurrent();

            $table->primary(['game', 'uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_tag');
    }
};
