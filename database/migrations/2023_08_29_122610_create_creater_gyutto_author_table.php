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
        Schema::create('creater_gyutto_author', function (Blueprint $table) {
            $table->integer('creater');
            $table->integer('gyutto_author');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['creater', 'gyutto_author']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creater_gyutto_author');
    }
};
