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

            'layout_id' => 1,
            'template_id' => 1,
            'slug' => 'test-slug',
            'title' => '<h3><strong>Зарабатывайте, помогая планете</strong></h3>',
            'description' => '<h4><ul><li>
                            Технические и юридические гарантии, сроки окупаемости
                        </li></ul><ul><li>
                            Как получить молодое дерево 2020 года по выгодной цене?
                        </li></ul><ul><li>
                            Как это может быть полезно Вам и планете одновременно?
                        </li></ul><ul><li>
                            Как происходит формирование цены на деревья и оливковое масло?
                        </li></ul></h4>',
            'text' => '<h3>С проектом <b>BioDeposit</b> Вы можете стать владельцем оливковых деревьев, помогать планете и ежегодно получать прибыль с продажи урожая.</h3>',
            'image' => 'background-flowers.jpg',
            'body_image' => 'pre-sale-bg.png',
            'youtube' => 'https://www.youtube.com/watch?v=T2lkwL6BoPQ',
            'video_status' => 0
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
