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
        Schema::create('usercreater', function (Blueprint $table) {
            $table->text('uid')->index('usercreater_uid_idx');
            $table->integer('creater')->index('usercreater_creater_idx');
            $table->text('comment')->nullable();
            $table->integer('rank')->default(5);
            $table->timestamp('timestamp')->nullable()->useCurrent();

            $table->primary(['uid', 'creater']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usercreater');
    }
};
