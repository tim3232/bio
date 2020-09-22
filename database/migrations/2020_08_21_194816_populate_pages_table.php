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
            'title' => '<p><font face="FiraSansBlack">ПРОТЕСТИРУЙТЕ НОВЫЙ СПОСОБ ЗАРАБАТЫВАТЬ</font></p>',
            'description' => '<p><font face="FiraSansBook">Выберите удобный мессенджер и узнайте:</font></p><ul><li><font face="FiraSansBook">технические и юридические гарантии, сроки окупаемости.</font></li><li><font face="FiraSansBook">как получить молодое дерево 2020 года по выгодной цене</font></li><li><font face="FiraSansBook">как это может быть полезно Вам и планете одновременно</font></li><li><font face="FiraSansBook">как происходит формирование цены на деревья и оливковое масло</font></li></ul>',
            'text' => '<p><font face="FiraSansBlack"><span style="font-family: FiraSansBold;">Попробуйте новый вариант пассивного дохода — оливковые деревья.</span></font></p><p><font face="FiraSansBlack"><span style="font-family: FiraSansBold;">Порог входа ниже, чем в других сферах, высокая устойчивость к кризисам, долгосрочная перспектива.</span></font></p><p><span style="font-family: FiraSansBold">Начать можно всего с одного дерева и лично убедиться, что это работает.</span></p>',
            'image' => 'new.jpg',
            'body_image' => 'pre-sale-bg.png',
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
