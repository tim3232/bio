<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('layout_id');
            $table->unsignedBigInteger('template_id');
            $table->timestamps();

            $table->foreign('layout_id')->references('id')->on('layouts');
            $table->foreign('template_id')->references('id')->on('templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layout_templates');
    }
}
