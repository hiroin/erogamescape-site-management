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
        Schema::create('campaignlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store')->index();
            $table->text('name');
            $table->text('url');
            $table->timestamp('start_timestamp')->nullable()->index();
            $table->timestamp('end_timestamp')->nullable()->index();
            $table->text('content');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('index_end_timestamp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaignlist');
    }
};
