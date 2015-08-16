<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch');
            $table->string('user_id');
            $table->string('charge_code');
            $table->float('concentration');
            $table->float('volume');
            $table->integer('tube_barcode');
            $table->integer('tube_location');
            $table->integer('lanes_required');
            $table->integer('ave_insert')->nullable();
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
        Schema::drop('batch');
    }
}
