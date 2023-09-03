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
        Schema::create('userreview_with_tag', function (Blueprint $table) {
            $table->text('tag')->index('userreview_with_tag_tag');
            $table->text('uid')->index('userreview_with_tag_uid');
            $table->integer('game')->index('userreview_with_tag_game');
            $table->text('comment')->nullable();
            $table->timestamp('timestamp')->useCurrent();

            $table->primary(['tag', 'game', 'uid']);
            $table->index(['uid', 'game'], 'userreview_with_tag_uid_and_game');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_with_tag');
    }
};
