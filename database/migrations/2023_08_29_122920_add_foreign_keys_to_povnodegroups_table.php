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
        Schema::table('povnodegroups', function (Blueprint $table) {
            $table->foreign(['pov'], 'povnodegroups_pov_fkey')->references(['id'])->on('povlist');
            $table->foreign(['pov_parent_node'], 'povnodegroups_pov_parent_node_fkey')->references(['id'])->on('povnodelist')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('povnodegroups', function (Blueprint $table) {
            $table->dropForeign('povnodegroups_pov_fkey');
            $table->dropForeign('povnodegroups_pov_parent_node_fkey');
        });
    }
};
