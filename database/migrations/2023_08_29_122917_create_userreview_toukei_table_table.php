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
        Schema::create('userreview_toukei_table', function (Blueprint $table) {
            $table->text('uid')->primary();
            $table->integer('tokuten_avg')->nullable()->index('tokuten_avg_userreview_toukei_table_index');
            $table->integer('tokuten_stddev')->nullable()->index('tokuten_stddev_userreview_toukei_table_index');
            $table->integer('tokuten_count')->nullable()->index('tokuten_count_userreview_toukei_table_index');
            $table->timestampTz('tourokubi_max')->nullable()->index('tourokubi_max_userreview_toukei_table_index');
            $table->timestampTz('tourokubi_min')->nullable()->index('tourokubi_min_userreview_toukei_table_index');
            $table->integer('hitokoto_count')->nullable()->index('hitokoto_count_userreview_toukei_table_index');
            $table->integer('memo_count')->nullable()->index('memo_count_userreview_toukei_table_index');
            $table->integer('before_hitokoto_count')->nullable()->index('before_hitokoto_count_userreview_toukei_table_index');
            $table->integer('before_tokuten_avg')->nullable()->index('before_tokuten_avg_userreview_toukei_table_index');
            $table->integer('before_tokuten_stddev')->nullable()->index('before_tokuten_stddev_userreview_toukei_table_index');
            $table->integer('before_tokuten_count')->nullable()->index('before_tokuten_count_userreview_toukei_table_index');
            $table->integer('trial_hitokoto_count')->nullable()->index('trial_hitokoto_count_userreview_toukei_table_index');

            $table->index(['uid'], 'uid_userreview_toukei_table_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userreview_toukei_table');
    }
};
