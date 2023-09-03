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
        Schema::create('resemble_user', function (Blueprint $table) {
            $table->text('uid')->index('resemble_user_uid');
            $table->text('resemble_uid')->index('resemble_user_resemble_uid');
            $table->float('point', 0, 0);
            $table->integer('count');

            $table->primary(['uid', 'resemble_uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resemble_user');
    }
};
