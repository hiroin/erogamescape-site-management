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
        Schema::create('brandname_for_search', function (Blueprint $table) {
            $table->integer('brand')->index('brandname_for_serch_brand_index');
            $table->text('name')->index('brandname_for_serch_name_index');

            $table->primary(['brand', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brandname_for_search');
    }
};
