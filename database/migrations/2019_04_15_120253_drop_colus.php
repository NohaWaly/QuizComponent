<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userscore', function (Blueprint $table) {
            //
            //$table->integer('score')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userscore', function (Blueprint $table) {
            //
            $table->dropColumn(['trueans1','trueans2','trueans3','trueans4','trueans5']);
        });
    }
}
