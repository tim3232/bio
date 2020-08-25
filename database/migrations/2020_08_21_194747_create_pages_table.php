<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->text('title');
            $table->unsignedBigInteger('layout_id');
            $table->unsignedBigInteger('template_id');
            $table->text('description')->nullable();
            $table->text('text')->nullable();
            $table->string('body_image')->nullable();
            $table->string('image')->nullable();
            $table->string('youtube')->nullable();
            $table->integer('video_status')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
