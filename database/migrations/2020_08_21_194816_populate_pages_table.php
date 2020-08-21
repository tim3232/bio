<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('pages')->insert([

            'image' => 'background-flowers.jpg',
            'body_image' => '1da723dd0b5c4fb98bc1fea47a11adf5.bmp',
            'slug' => 'test-slug',
             'title' => 'title',
            'description' => 'dsdsdsdsdss',
            'layout_id' => 1,
            'text' => 'dsddfd',
            'template_id' => 1,
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
