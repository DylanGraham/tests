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
            $table->text('batch');
            $table->text('user_id');
            $table->text('charge_code');
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
