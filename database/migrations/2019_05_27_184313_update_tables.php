<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('skills');
        Schema::dropIfExists('raids');
        Schema::dropIfExists('votes');
        Schema::dropIfExists('remarks');
        Schema::dropIfExists('inhabitants');
        Schema::dropIfExists('villages');
        Schema::create('villages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50);
            $table->text('body');
            $table->unsignedInteger('date');
            $table->unsignedInteger('winner')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::create('inhabitants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('village_id');
            $table->unsignedInteger('skill');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('village_id')->references('id')->on('villages');
        });
        Schema::create('remarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('village_id');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->unsignedInteger('inhabitant_id');
            $table->foreign('inhabitant_id')->references('id')->on('inhabitants');
            $table->text('body');
            $table->unsignedInteger('date');
            $table->timestamp('created_at');
        });
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
        Schema::create('raids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('village_id');
            $table->unsignedInteger('date');
            $table->unsignedInteger('inhabitant_id');
            $table->unsignedInteger('target_id');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->foreign('inhabitant_id')->references('id')->on('inhabitants');
            $table->foreign('target_id')->references('id')->on('inhabitants');
        });
        Schema::create('skills', function (Blueprint $table) {
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
        Schema::dropIfExists('skills');
        Schema::dropIfExists('raids');
        Schema::dropIfExists('votes');
        Schema::dropIfExists('remarks');
        Schema::dropIfExists('inhabitants');
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
        Schema::create('inhabitants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('village_id');
            $table->unsignedInteger('skill');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('village_id')->references('id')->on('villages');
        });
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
        Schema::create('raids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('village_id');
            $table->unsignedInteger('date');
            $table->unsignedInteger('inhabitant_id');
            $table->unsignedInteger('target_id');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->foreign('inhabitant_id')->references('id')->on('inhabitants');
            $table->foreign('target_id')->references('id')->on('inhabitants');
        });
        Schema::create('skills', function (Blueprint $table) {
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
}
