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
            $table->string('question1')->nullable();
            $table->string('choice11')->nullable();
            $table->string('choice21')->nullable();
            $table->string('choice31')->nullable();
            $table->string('modelans1')->nullable();
            $table->string('question2')->nullable();
            $table->string('choice12')->nullable();
            $table->string('choice22')->nullable();
            $table->string('choice32')->nullable();
            $table->string('modelans2')->nullable();
            $table->string('question3')->nullable();
            $table->string('choice13')->nullable();
            $table->string('choice23')->nullable();
            $table->string('choice33')->nullable();
            $table->string('modelans3')->nullable();
            $table->string('question4')->nullable();
            $table->string('choice14')->nullable();
            $table->string('choice24')->nullable();
            $table->string('choice34')->nullable();
            $table->string('modelans4')->nullable();
            $table->string('question5')->nullable();
            $table->string('choice15')->nullable();
            $table->string('choice25')->nullable();
            $table->string('choice35')->nullable();
            $table->string('modelans5')->nullable();
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
