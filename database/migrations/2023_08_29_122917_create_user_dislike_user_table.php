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
        Schema::create('user_dislike_user', function (Blueprint $table) {
            $table->text('dislike_uid');
            $table->text('voter_uid');
            $table->timestamp('timestamp')->nullable()->useCurrent();

            $table->primary(['dislike_uid', 'voter_uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_dislike_user');
    }
};
