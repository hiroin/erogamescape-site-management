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
        Schema::create('povmygroup', function (Blueprint $table) {
            $table->text('uid')->index('povmygroup_uid');
            $table->integer('pov')->index('povmygroup_pov');
            $table->boolean('adoption')->nullable()->index('povmygroup_adoption');

            $table->primary(['uid', 'pov']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('povmygroup');
    }
};
