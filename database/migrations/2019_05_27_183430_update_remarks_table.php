<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('remarks');
        Schema::create('remarks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('village_id');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->unsignedInteger('inhabitant_id');
            $table->foreign('inhabitant_id')->references('id')->on('inhabitants');
            $table->text('body');
            $table->unsignedInteger('date');
            $table->timestamp('created_at');
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
        Schema::create('remarks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('village_id');
            $table->text('body');
            $table->timestamps();
            $table->foreign('village_id')->references('id')->on('villages');
        });
    }
}
