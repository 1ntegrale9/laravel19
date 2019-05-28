<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inhabitants', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('remarks', function (Blueprint $table) {
            $table->timestamp('updated_at');
        });
        Schema::table('votes', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('raids', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('skills', function (Blueprint $table) {
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
        Schema::table('inhabitants', function (Blueprint $table) {
            $table->dropTimestamps();
        });
        Schema::table('remarks', function (Blueprint $table) {
            $table->dropColumn('updated_at');
        });
        Schema::table('votes', function (Blueprint $table) {
            $table->dropTimestamps();
        });
        Schema::table('raids', function (Blueprint $table) {
            $table->dropTimestamps();
        });
        Schema::table('skills', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
