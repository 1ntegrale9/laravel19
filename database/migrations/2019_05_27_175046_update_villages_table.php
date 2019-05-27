<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('remarks');
        Schema::dropIfExists('villages');
        Schema::create('villages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->text('body');
            $table->unsignedInteger('date');
            $table->unsignedInteger('winner')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::create('remarks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('village_id');
            $table->text('body');
            $table->timestamps();
            $table->foreign('village_id')->references('id')->on('villages');
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
        Schema::dropIfExists('villages');
        Schema::create('villages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->text('body');
            $table->timestamps();
        });
        Schema::create('remarks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('village_id');
            $table->text('body');
            $table->timestamps();
            $table->foreign('village_id')->references('id')->on('villages');
        });
    }
}
