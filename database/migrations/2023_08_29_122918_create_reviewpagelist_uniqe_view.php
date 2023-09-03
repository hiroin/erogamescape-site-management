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
        DB::statement("CREATE VIEW \"reviewpagelist_uniqe\" AS  SELECT reviewpagelist.id,
    reviewpagelist.game,
    reviewpagelist.reviewpage,
    reviewpagelist.tokuten,
    reviewpagelist.tourokubi,
    reviewpagelist.memo
   FROM reviewpagelist
  WHERE (NOT (reviewpagelist.reviewpage IN ( SELECT DISTINCT reviewpagelist_1.reviewpage
           FROM reviewpagelist reviewpagelist_1
          GROUP BY reviewpagelist_1.reviewpage, reviewpagelist_1.game
         HAVING (count(reviewpagelist_1.game) > 1)
          ORDER BY reviewpagelist_1.reviewpage)));");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS \"reviewpagelist_uniqe\"");
    }
};
