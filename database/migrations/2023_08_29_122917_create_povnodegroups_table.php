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
        Schema::create('povnodegroups', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('pov')->index('povnodegroups_pov');
            $table->integer('pov_parent_node')->index('povnodegroups_pov_parent_node');
            $table->integer('touhyou')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povnodegroups');
    }
};
