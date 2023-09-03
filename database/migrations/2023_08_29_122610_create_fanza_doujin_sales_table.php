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
        Schema::create('fanza_doujin_sales', function (Blueprint $table) {
            $table->text('cid')->index();
            $table->text('title');
            $table->integer('maker_id')->index();
            $table->text('maker_name');
            $table->integer('price')->index();
            $table->integer('discount_rate')->index();
            $table->text('img');
            $table->text('genre')->index();
            $table->integer('number_of_sales')->index();
            $table->timestampTz('campaign_due_date')->index();
            $table->date('create_date')->useCurrent()->index();
            $table->date('delivery_start_date');
            $table->integer('number_of_pages');

            $table->primary(['cid', 'campaign_due_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fanza_doujin_sales');
    }
};
