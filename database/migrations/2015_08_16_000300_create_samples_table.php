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
            $table->increments->primary('id');
            $table->foreign('batch_id')->references('id')->on('batch')->nullable();
            $table->text('basc-project');
            $table->text->unique('name');
            $table->foreign('i7_id')->references('id')->on('indexi7');
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
