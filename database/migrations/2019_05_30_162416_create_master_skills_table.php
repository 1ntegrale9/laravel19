<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedInteger('cliques');
            $table->unsignedInteger('species');
            $table->unsignedInteger('can_raid');
            $table->unsignedInteger('can_divine');
            $table->unsignedInteger('can_dissect');
            $table->unsignedInteger('can_escort');
            $table->string('symbol', 1)->unique();
            $table->string('name', 20)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_skills');
    }
}
