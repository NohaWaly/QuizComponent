<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Quiz;

class QuizTest extends TestCase
{

//this test make sure that api addnewquiz is  working correct with storing obj in db
public function testPostQuiz()
{
    $data = [
        'quiztitle' => 'web',
        'skilltype' =>'backend',
        'passsocre' => 1,
        'duration' => 1,
    ];
    $this->json('post','api/quizzes/addnewquiz', $data)
     ->assertStatus(201);  
  }

//this test make sure that api addquestion is  working correct with storing obj in db 

  public function testPostQuestion()
{
    $data = [

        'id'=>8,
        'quesid'=>1,


        'question' => 'web',
        'choice1' =>'backend',
        'choice2' => 'a',
        'choice3' => 'a',
        'modelans' => 'a',

    ];
    $this->json('post','api/quizzes/addquestion', $data)
     ->assertStatus(200);  
  }

//the vaildation of accessing wrong question number
//the vaildation of accessing not existing quiz
  public function testHandlingQuestionExceptions()
{
    $data = [
        'id'=>100,
        'quesid'=>6,
        'question' => 'web',
        'choice1' =>'backend',
        'choice2' => 'a',
        'choice3' => 'a',
        'modelans' => 'a',

    ];
    $this->json('post','api/quizzes/addquestion', $data)
     ->assertStatus(200);  
  }

  //test that the quiz has been deleted and if quiz doesn't exist it check it too
  public function testDeleteQuiz()
  {
      $data = [
          'id'=>4,  
      ];
      $this->json('post','api/quizzes/deletequiz', $data)
      ->assertStatus(200);  
    }

//test api getskilltype is working & if handle if skilltype doesn't exist
public function testGetSkillType()
      {
          $data = [
              'skilltype'=>'bob',  
          ];
          $this->json('post','api/quizzes/getskilltype', $data)
          ->assertStatus(200);  
    }
      
//test api getquiz is working & if handle if quiz doesn't exist
public function testGetQuiz()
      {
          $data = [
              'quizid'=> 200,  
          ];
          $this->json('post','api/quizzes/getquiz', $data)
          ->assertStatus(200);  
    }

//test api getuserscore is working & if handle if user doesn't exist
    public function testGetUserScore()
  {
      $data = [
          'id'=>0,  
      ];
      $this->json('post','api/answer/getusersocre', $data)
      ->assertStatus(200);
}

   



    }





   