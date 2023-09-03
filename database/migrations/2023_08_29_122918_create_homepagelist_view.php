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
        DB::statement("CREATE VIEW \"homepagelist\" AS  SELECT homepagelistmaster.id,
    homepagelistmaster.title,
    homepagelistmaster.furigana,
    homepagelistmaster.url,
    homepagelistmaster.admin,
    homepagelistmaster.tokuten,
    homepagelistmaster.checked,
    homepagelistmaster.reviewsite
   FROM homepagelistmaster;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS \"homepagelist\"");
    }
};
