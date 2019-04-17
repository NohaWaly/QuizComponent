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

Route::get('quizzes/{id}', 'QuizController@show');

Route::get('quizzes', 'QuizController@index');

Route::get('quizzes/create', 'QuizController@create');

//take parameters of quiz attribute(msh hanst3lha)
Route::post('quizzes/add', 'QuizController@createnewquiz');

//take parameter of skilltype

Route::post('quizzes/getskilltype', 'QuizController@getskilltype');


Route::post('answer/add', 'AnswerController@store');


 //Route::get('quizzes/delete/{id}', 'QuizController@destory');
