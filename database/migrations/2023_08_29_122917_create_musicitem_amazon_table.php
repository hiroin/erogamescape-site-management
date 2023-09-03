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
        Schema::create('musicitem_amazon', function (Blueprint $table) {
            $table->integer('musicitem');
            $table->text('asin');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['musicitem', 'asin']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicitem_amazon');
    }
};
