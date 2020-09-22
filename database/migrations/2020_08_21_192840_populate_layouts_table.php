<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulateLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('layouts')->insert([

            'type' => 'basic',
            'description' => 'посадочная страница',
            'name' => 'basic',
            'image' => 'layout1.png',

        ]);

        DB::table('layouts')->insert([

            'type' => 'first',
            'description' => 'картинка слева текст справа',
            'name' => 'first-one',
            'image' => 'layout2.png',

        ]);

        DB::table('layouts')->insert([

            'type' => 'first',
            'description' => 'титул центр картинка центр',
            'name' => 'first-two',
            'image' => 'layout3.png',

        ]);

        DB::table('layouts')->insert([

            'type' => 'basic',
            'description' => 'слева текст справа картинка',
            'name' => 'basic-two',
            'image' => 'layout4.png',

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
