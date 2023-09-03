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
        Schema::create('musicitem_dmm', function (Blueprint $table) {
            $table->integer('musicitem');
            $table->text('genre1');
            $table->text('genre2');
            $table->text('cid');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['musicitem', 'genre1', 'genre2', 'cid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicitem_dmm');
    }
};
