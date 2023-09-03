<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('login_log', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('uid')->nullable()->index('login_log_uid');
            $table->text('uid_cookie')->nullable()->index('login_log_uid_cookie');
            $table->text('ip')->nullable()->index('login_log_ip');
            $table->text('host')->nullable();
            $table->timestampTz('timestamp')->nullable()->default(DB::raw("('now'::text)::timestamp(6) with time zone"))->index('login_log_timestamp');
            $table->text('agent')->nullable();
            $table->text('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_log');
    }
};
