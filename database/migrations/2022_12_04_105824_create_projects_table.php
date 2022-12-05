<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("image1");
            $table->string("image2");
            $table->string("image3");
            $table->string("image4");
            $table->string("title");
            $table->string("category");
            $table->string("client");
            $table->timestamp("end_date");
            $table->string("url")->nullable();
            $table->mediumText("discription");
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
        Schema::dropIfExists('projects');
    }
}
