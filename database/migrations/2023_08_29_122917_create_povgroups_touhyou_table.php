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
        Schema::create('povgroups_touhyou', function (Blueprint $table) {
            $table->integer('pg_id')->index('povgroups_touhyou_pg_id');
            $table->text('voter_uid')->index('povgroups_touhyou_voter_uid');
            $table->text('hitokoto')->nullable();
            $table->timestampTz('timestamp')->nullable()->default('now');

            $table->primary(['pg_id', 'voter_uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povgroups_touhyou');
    }
};
