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
        Schema::table('povadjust_res_hiroin', function (Blueprint $table) {
            $table->foreign(['pov1'], 'povadjust_res_hiroin_pov1_fkey')->references(['id'])->on('povlist')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['pov2'], 'povadjust_res_hiroin_pov2_fkey')->references(['id'])->on('povlist')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('povadjust_res_hiroin', function (Blueprint $table) {
            $table->dropForeign('povadjust_res_hiroin_pov1_fkey');
            $table->dropForeign('povadjust_res_hiroin_pov2_fkey');
        });
    }
};
