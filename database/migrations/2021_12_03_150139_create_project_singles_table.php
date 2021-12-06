<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_singles', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->string('title');
            $table->string('descr');
            $table->string('client');
            $table->string('architect');
            $table->string('location');
            $table->string('size');
            $table->string('yearCompleted');
            $table->string('categories');
            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_singles');
    }
}
