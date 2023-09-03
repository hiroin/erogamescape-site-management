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
        Schema::table('consumergamelist', function (Blueprint $table) {
            $table->foreign(['genre'], 'check_ins_cgamelist_genre')->references(['genre'])->on('genrelist');
            $table->foreign(['brandname'], 'consumergamelist_brandname_fkey')->references(['id'])->on('brandlist')->onUpdate('CASCADE');
            $table->foreign(['model'], 'consumergamelist_model_fkey')->references(['modelname'])->on('modellist')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consumergamelist', function (Blueprint $table) {
            $table->dropForeign('check_ins_cgamelist_genre');
            $table->dropForeign('consumergamelist_brandname_fkey');
            $table->dropForeign('consumergamelist_model_fkey');
        });
    }
};
