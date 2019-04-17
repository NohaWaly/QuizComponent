<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuestionsToQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->string('question1');
            $table->string('choice1a');
            $table->string('choice2a');
            $table->string('choice3a');
            $table->string('modelans1');
            $table->string('question2');
            $table->string('choice1b');
            $table->string('choice2b');
            $table->string('choice3b');
            $table->string('modelans2');
            $table->string('question3');
            $table->string('choice1c');
            $table->string('choice2c');
            $table->string('choice3c');
            $table->string('modelans3');
            $table->string('question4');
            $table->string('choice1d');
            $table->string('choice2d');
            $table->string('choice3d');
            $table->string('modelans4');
            $table->string('question5');
            $table->string('choice1e');
            $table->string('choice2e');
            $table->string('choice3e');
            $table->string('modelans5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            //
        });
    }
}
