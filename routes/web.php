<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('quizzes','QuizController');

Route::resource('answer','AnswerController');

//Route::resource('answer/{id}','AnswerController@index');
//msh sha3'ala
Route::post('answer/{id}','AnswerController@index');

Route::post('/edit','QuizController@update');



Route::get('/delete', function () {
    return ('welcome');
});