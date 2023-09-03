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
        Schema::create('musicitem_othereditionlist', function (Blueprint $table) {
            $table->integer('musicitem');
            $table->text('edition');
            $table->text('information')->nullable();
            $table->text('ohp')->nullable();
            $table->text('jan')->nullable()->index();
            $table->text('stocknumber')->nullable()->index();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->primary(['musicitem', 'edition']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicitem_othereditionlist');
    }
};
