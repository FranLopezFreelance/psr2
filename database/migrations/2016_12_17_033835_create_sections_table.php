<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level');
            $table->integer('section_id')->default(0);
            $table->string('name');
            $table->string('html_title');
            $table->text('description');
            $table->text('social_desc');
            $table->integer('typeview_id');
            $table->string('social_img')->default('default.jpg');
            $table->string('url');
            $table->string('order')->default(1);
            $table->integer('topnav')->default(1);
            $table->integer('topnav_back')->default(0);
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
        Schema::dropIfExists('sections');
    }
}
