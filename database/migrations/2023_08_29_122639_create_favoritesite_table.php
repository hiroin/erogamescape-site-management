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
        Schema::create('favoritesite', function (Blueprint $table) {
            $table->text('uid')->index('uid_favoritesite_index');
            $table->integer('reviewsite')->index('reviewsite_favoritesite_index');
            $table->integer('syubetu')->nullable();
            $table->text('hitokoto')->nullable();

            $table->primary(['uid', 'reviewsite']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoritesite');
    }
};
