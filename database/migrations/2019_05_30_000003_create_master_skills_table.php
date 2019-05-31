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
            $table->unsignedInteger('cliques')->default(1);
            $table->unsignedInteger('species')->default(1);
            $table->boolean('can_raid')->default(False);
            $table->boolean('can_divine')->default(False);
            $table->boolean('can_dissect')->default(False);
            $table->boolean('can_escort')->default(False);
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
