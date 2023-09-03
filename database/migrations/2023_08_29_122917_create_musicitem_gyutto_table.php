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
        Schema::create('musicitem_gyutto', function (Blueprint $table) {
            $table->integer('musicitem');
            $table->integer('gyutto');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['musicitem', 'gyutto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicitem_gyutto');
    }
};
