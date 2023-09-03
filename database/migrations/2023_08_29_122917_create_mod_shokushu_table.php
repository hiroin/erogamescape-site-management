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
        Schema::create('mod_shokushu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shokushu_id')->index('mod_shokushu_shokushu_id');
            $table->integer('shubetu')->index('mod_shokushu_shubetu');
            $table->integer('shubetu_detail');
            $table->text('shubetu_detail_name')->nullable();
            $table->boolean('delete_flag')->nullable()->default(false);
            $table->boolean('cancel_flag')->nullable()->default(false);
            $table->boolean('reflect_flag')->nullable()->default(false);
            $table->text('bikou')->nullable();
            $table->timestamp('timestamp')->nullable()->default('now');
            $table->text('ip')->nullable();
            $table->text('cancel_ip')->nullable();
            $table->text('cancel_reason')->nullable();
            $table->timestamp('cancel_timestamp')->nullable();

            $table->index(['id'], 'mod_shokushu_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_shokushu');
    }
};
