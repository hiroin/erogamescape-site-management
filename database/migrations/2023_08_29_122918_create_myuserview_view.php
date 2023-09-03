<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW \"myuserview\" AS  SELECT myuser.uid,
    myuser.title,
    myuser.url,
    myuser.hitokoto,
    myuser.touhyou,
    myuser.choubun_ress,
    myuser.birth,
    myuser.sex,
    myuser.userreview_log,
    myuser.twitter_username,
    myuser.user_only_possession_display,
    myuser.filter_avg_min,
    myuser.filter_avg_max,
    myuser.filter_stddev_min,
    myuser.filter_stddev_max,
    myuser.filter_tokuten_count_min,
    myuser.filter_hitokoto_count_min,
    myuser.filter_memo_count_min,
    myuser.filter_active_user_day,
    myuser.filter_old_user_day,
    myuser.user_pleased_display,
    myuser.gamemeter,
    myuser.total_play_display,
    myuser.user_before_purchase_will_display,
    myuser.pov_limit,
    myuser.vote_user_count_display,
    myuser.voted_user_count_display,
    myuser.vote_creater_count_display,
    myuser.vote_userreview_count_display,
    myuser.voted_userreview_count_display
   FROM myuser;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS \"myuserview\"");
    }
};
