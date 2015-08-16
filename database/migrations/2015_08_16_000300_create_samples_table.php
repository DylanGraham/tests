<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->nullable();
            $table->foreign('batch_id')->references('id')->on('batch');
            $table->string('basc_project');
            $table->string('name')->unique();
            $table->integer('i7_id');
            $table->foreign('i7_id')->references('id')->on('indexi7');
            $table->integer('i5_id')->nullable();
            $table->foreign('i5_id')->references('id')->on('indexi5')->nullable();
            $table->integer('plate')->nullable();
            $table->integer('well')->nullable();
            $table->integer('lane')->nullable();
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
        Schema::drop('samples');
    }
}
