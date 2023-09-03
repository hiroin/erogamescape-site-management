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
        Schema::create('gamelist', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->text('gamename');
            $table->text('furigana');
            $table->date('sellday')->nullable()->default('2030-01-01')->index('gamelist_sellday');
            $table->integer('brandname')->nullable()->index('brandname_index');
            $table->integer('median')->nullable()->index('tokuten_index');
            $table->integer('stdev')->nullable();
            $table->integer('creater')->nullable();
            $table->text('kansouurl')->nullable();
            $table->boolean('checked')->nullable()->default(false);
            $table->integer('hanbaisuu')->nullable();
            $table->integer('average2')->nullable();
            $table->integer('median2')->nullable();
            $table->integer('count2')->nullable();
            $table->text('comike')->nullable();
            $table->text('shoukai')->nullable();
            $table->text('model')->nullable()->default('PC');
            $table->boolean('checked2')->nullable()->default(false);
            $table->boolean('erogame')->nullable()->default(true);
            $table->text('galge')->nullable();
            $table->text('elfics')->nullable();
            $table->text('banner_url')->nullable();
            $table->boolean('admin_checked')->nullable();
            $table->integer('max2')->nullable();
            $table->integer('min2')->nullable();
            $table->text('gyutto_enc')->nullable();
            $table->string('gyutto_id', 6)->nullable();
            $table->text('dmm')->nullable();
            $table->text('dmm_genre')->nullable();
            $table->text('dmm_genre_2')->nullable();
            $table->integer('erogametokuten')->nullable();
            $table->integer('total_play_time_median')->nullable();
            $table->integer('time_before_understanding_fun_median')->nullable();
            $table->text('dlsite_id')->nullable();
            $table->text('dlsite_domain')->nullable();
            $table->integer('the_number_of_uid_which_input_pov')->nullable();
            $table->integer('the_number_of_uid_which_input_play')->nullable();
            $table->integer('total_pov_enrollment_of_a')->nullable();
            $table->integer('total_pov_enrollment_of_b')->nullable();
            $table->integer('total_pov_enrollment_of_c')->nullable();
            $table->text('trial_url')->nullable();
            $table->boolean('trial_h')->nullable();
            $table->integer('http_response_code')->nullable();
            $table->boolean('okazu')->nullable();
            $table->integer('axis_of_soft_or_hard')->nullable();
            $table->timestamp('trial_url_update_time')->default('0001-01-01 00:00:00')->index('gamelist_trial_url_update_time');
            $table->text('genre')->nullable();
            $table->text('twitter')->nullable();
            $table->integer('erogetrailers')->default(0);
            $table->date('tourokubi')->nullable()->useCurrent();
            $table->text('digiket')->nullable();
            $table->integer('dmm_sample_image_count')->nullable()->default(-1);
            $table->integer('dlsite_sample_image_count')->nullable()->default(-1);
            $table->integer('gyutto_sample_image_count')->nullable()->default(-1);
            $table->integer('digiket_sample_image_count')->nullable()->default(-1);
            $table->text('twitter_search')->nullable();
            $table->integer('tgfrontier')->default(0);
            $table->text('gamemeter')->nullable();
            $table->text('twitter_data_widget_id')->nullable();
            $table->text('twitter_data_widget_id_before')->nullable();
            $table->text('twitter_data_widget_id_official')->nullable();
            $table->date('masterup')->nullable();
            $table->timestamp('masterup_tourokubi')->nullable();
            $table->integer('steam')->nullable();
            $table->boolean('dlsite_rental')->nullable()->default(false);
            $table->text('dmm_subsc')->nullable();
            $table->integer('surugaya_1')->default(0);
            $table->integer('surugaya_2')->default(0);
            $table->boolean('surugaya_1_back_image')->default(false);
            $table->boolean('surugaya_2_back_image')->default(false);
            $table->integer('count_all')->nullable();
            $table->integer('playrack')->default(0);
            $table->text('vndb')->nullable();
            $table->integer('moepedia')->default(0);
            $table->text('hbox_link')->nullable();
            $table->integer('hbox_id')->default(0);
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
        Schema::dropIfExists('gamelist');
    }
};
