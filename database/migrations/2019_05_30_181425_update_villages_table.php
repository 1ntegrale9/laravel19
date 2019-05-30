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
        Schema::table('inhabitants', function (Blueprint $table) {
            $table->dropColumn('skill');
            $table->unsignedInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('master_skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inhabitants', function (Blueprint $table) {
            $table->dropColumn('skill_id');
            $table->unsignedInteger('skill');
        });
    }
}
