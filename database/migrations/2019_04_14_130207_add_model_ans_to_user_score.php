<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModelAnsToUserScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userscore', function (Blueprint $table) {
            $table->string('trueans1');
            $table->string('trueans2');
            $table->string('trueans3');
            $table->string('trueans4');
            $table->string('trueans5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_score', function (Blueprint $table) {
            //
        });
    }
}
