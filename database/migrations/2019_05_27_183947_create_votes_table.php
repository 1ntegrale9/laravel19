<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('village_id');
            $table->unsignedInteger('date');
            $table->unsignedInteger('inhabitant_id');
            $table->unsignedInteger('target_id');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->foreign('inhabitant_id')->references('id')->on('inhabitants');
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
        Schema::dropIfExists('votes');
    }
}
