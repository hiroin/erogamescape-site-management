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
        Schema::create('usersql', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('uid')->index('usersql_uid');
            $table->text('sql');
            $table->text('title');
            $table->text('explanation')->nullable();
            $table->timestampTz('create_timestamp')->nullable()->default('now');
            $table->timestampTz('update_timestamp')->nullable()->default('now');
            $table->boolean('public_open')->default(false);

            $table->unique(['id', 'public_open'], 'usersql_id_public_open');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersql');
    }
};
