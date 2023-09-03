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
        Schema::create('mod_gamelist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game')->index('mod_gamelist_game');
            $table->text('gamename')->nullable();
            $table->text('furigana')->nullable();
            $table->date('sellday')->nullable();
            $table->text('comike')->nullable();
            $table->text('shoukai')->nullable();
            $table->text('model')->nullable();
            $table->boolean('checked')->nullable()->default(false)->index('mod_gamelist_checked');
            $table->timestamp('timestamp')->nullable()->default('now');
            $table->text('bikou')->nullable();
            $table->text('galge')->nullable();
            $table->boolean('erogame')->nullable();
            $table->integer('holyseal')->nullable();
            $table->integer('holyseal1')->nullable();
            $table->integer('holyseal2')->nullable();
            $table->text('amazon')->nullable();
            $table->text('amazon1')->nullable();
            $table->text('amazon2')->nullable();
            $table->text('amazon3')->nullable();
            $table->text('banner_url')->nullable();
            $table->string('gyutto', 6)->nullable();
            $table->text('dmm')->nullable();
            $table->text('ip')->nullable();
            $table->text('dmm_genre')->nullable();
            $table->text('dmm_genre_2')->nullable();
            $table->integer('erogametokuten')->nullable();
            $table->text('dlsite_id')->nullable();
            $table->text('dlsite_domain')->nullable();
            $table->boolean('trial_h')->nullable();
            $table->text('trial_url')->nullable();
            $table->boolean('okazu')->nullable();
            $table->integer('axis_of_soft_or_hard')->nullable();
            $table->text('genre')->nullable();
            $table->text('twitter')->nullable();
            $table->integer('erogetrailers')->nullable();
            $table->text('digiket')->nullable();
            $table->integer('tgfrontier')->nullable();
            $table->text('gamemeter')->nullable();
            $table->date('masterup')->nullable();
            $table->text('masterup_source_url')->nullable();
            $table->integer('steam')->nullable();
            $table->boolean('dlsite_rental')->nullable();
            $table->integer('surugaya_1')->default(0);
            $table->integer('surugaya_2')->default(0);
            $table->text('ooparts_1')->nullable();
            $table->integer('playrack')->default(0);
            $table->text('vndb')->nullable();
            $table->integer('moepedia')->default(0);
            $table->text('emdb')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mod_gamelist');
    }
};
