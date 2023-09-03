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
        Schema::create('music_gyutto', function (Blueprint $table) {
            $table->integer('music');
            $table->integer('gyutto');
            $table->boolean('auto_import_flag')->default(false);
            $table->boolean('fixed_flag')->default(false);
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['music', 'gyutto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music_gyutto');
    }
};
