<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//return view for a quiz
Route::get('quizzes/{id}', 'QuizController@show');

//return view for all quizzes in the system
Route::get('quizzes', 'QuizController@index');

//return view to create a quiz
Route::get('quizzes/create', 'QuizController@create');

//take parameters of quiz main attribute
Route::post('quizzes/addnewquiz', 'QuizController@createnewquiz');

//take parameters of 1st question main attribute & id of quiz
Route::post('quizzes/addquestion1', 'QuizController@addquestion1');

//take parameters of 1st question main attribute & id of quiz
Route::post('quizzes/addquestion2', 'QuizController@addquestion2');

//take parameters of 1st question main attribute & id of quiz
Route::post('quizzes/addquestion3', 'QuizController@addquestion3');

//take parameters of 1st question main attribute & id of quiz
Route::post('quizzes/addquestion4', 'QuizController@addquestion4');

//take parameters of 1st question main attribute & id of quiz
Route::post('quizzes/addquestion4', 'QuizController@addquestion4');

//take id as parameter
 Route::post('quizzes/deletequiz', 'QuizController@deletequiz');

//take parameter of skilltype
Route::post('quizzes/getskilltype', 'QuizController@getskilltype');

//take userid as parameter and return jason obj
Route::post('answer/getusersocre', 'AnswerController@getusersocre');


