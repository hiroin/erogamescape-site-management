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
        Schema::create('user_user', function (Blueprint $table) {
            $table->text('uid')->index('user_user_user_idx');
            $table->text('voter_uid')->index('user_user_voter_user_idx');
            $table->timestamp('timestamp')->nullable()->useCurrent();

            $table->primary(['uid', 'voter_uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_user');
    }
};
