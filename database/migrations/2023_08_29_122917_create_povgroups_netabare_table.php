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
        Schema::create('povgroups_netabare', function (Blueprint $table) {
            $table->integer('pg_id')->index('povgroups_netabare_pg_id');
            $table->text('voter_uid')->index('povgroups_netabare_voter_uid');
            $table->boolean('yes_no');
            $table->timestampTz('timestamp')->nullable()->default('now');
            $table->text('reason')->nullable();

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
        Schema::dropIfExists('povgroups_netabare');
    }
};
