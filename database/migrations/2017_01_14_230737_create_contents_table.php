<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id');
            $table->integer('videotype_id')->default(0);
            $table->string('url');
            $table->string('title');
            $table->string('html_title');
            $table->text('description');
            $table->text('social_desc');
            $table->string('social_img')->default('default.jpg');
            $table->integer('typeview_id');
            $table->text('text');
            $table->integer('author_id')->default(0);
            $table->string('video_id')->default('');
            $table->string('img_url')->default('default.jpg');
            $table->date('date');
            $table->integer('views')->default(0);
            $table->string('dest')->default(0);
            $table->integer('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
