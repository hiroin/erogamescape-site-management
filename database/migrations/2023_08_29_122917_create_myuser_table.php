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
        Schema::create('myuser', function (Blueprint $table) {
            $table->text('uid')->primary();
            $table->text('password');
            $table->timestampTz('lastlogin');
            $table->text('mail')->nullable();
            $table->text('host');
            $table->date('firstlogin');
            $table->text('title')->nullable();
            $table->text('url')->nullable();
            $table->text('hitokoto')->nullable();
            $table->boolean('touhyou')->nullable()->default(true);
            $table->boolean('choubun_ress')->nullable()->default(true);
            $table->integer('birth')->nullable();
            $table->boolean('sex')->nullable();
            $table->integer('pov_limit')->nullable();
            $table->text('pov_select_way')->nullable();
            $table->integer('pov_checked_id')->nullable();
            $table->boolean('userreview_log')->nullable()->default(true);
            $table->integer('password_miss_count')->nullable()->default(0);
            $table->text('mail_add_key')->nullable();
            $table->boolean('mail_active_flag')->nullable()->default(false);
            $table->timestampTz('mail_add_key_date')->nullable()->default('1970-01-01 00:00:00+09');
            $table->boolean('mail_send_chobun_ress')->default(true);
            $table->boolean('mail_send_userreview_update')->default(true);
            $table->string('twitter_username', 20)->nullable();
            $table->boolean('user_only_possession_display')->nullable()->default(true);
            $table->boolean('mail_send_shokushu_update')->default(true);
            $table->boolean('mail_send_gamelist_sellday_update')->default(true);
            $table->text('note')->nullable();
            $table->integer('filter_avg_min')->nullable();
            $table->integer('filter_avg_max')->nullable();
            $table->integer('filter_stddev_min')->nullable();
            $table->integer('filter_stddev_max')->nullable();
            $table->integer('filter_tokuten_count_min')->nullable();
            $table->integer('filter_hitokoto_count_min')->nullable();
            $table->integer('filter_memo_count_min')->nullable();
            $table->integer('filter_active_user_day')->nullable();
            $table->integer('filter_old_user_day')->nullable();
            $table->boolean('user_pleased_display')->nullable()->default(true);
            $table->integer('gamemeter')->nullable()->unique();
            $table->boolean('total_play_display')->nullable()->default(true);
            $table->boolean('mail_send_gamelist_trial_update')->default(true);
            $table->boolean('mail_send_userreview_touhyou')->default(true);
            $table->boolean('user_before_purchase_will_display')->default(true);
            $table->text('password_hash')->nullable();
            $table->boolean('mail_send_gamelist_masterup_update')->default(true);
            $table->boolean('mail_send_campaignlist_update')->default(true);
            $table->boolean('vote_user_count_display')->default(true);
            $table->boolean('voted_user_count_display')->default(true);
            $table->boolean('vote_creater_count_display')->default(true);
            $table->boolean('vote_userreview_count_display')->default(true);
            $table->boolean('voted_userreview_count_display')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myuser');
    }
};
