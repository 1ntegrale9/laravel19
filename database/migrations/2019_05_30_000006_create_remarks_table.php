<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('body');
            $table->unsignedInteger('date')->default(0);
            $table->unsignedInteger('village_id');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->unsignedInteger('inhabitant_id');
            $table->foreign('inhabitant_id')->references('id')->on('inhabitants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remarks');
    }
}
