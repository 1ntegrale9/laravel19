<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedInteger('date');
            $table->unsignedInteger('village_id');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->unsignedInteger('inhabitant_id');
            $table->foreign('inhabitant_id')->references('id')->on('inhabitants');
            $table->unsignedInteger('target_id');
            $table->foreign('target_id')->references('id')->on('inhabitants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raids');
    }
}
