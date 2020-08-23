<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulateLayoutTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('layout_templates')->insert([

            'template_id' => 1,
            'layout_id' => 1
        ]);

        DB::table('layout_templates')->insert([

            'template_id' => 2,
            'layout_id' => 2
        ]);

        DB::table('layout_templates')->insert([

            'template_id' => 2,
            'layout_id' => 3
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
