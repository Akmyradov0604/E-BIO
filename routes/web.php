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
Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function() {
		Route::post('/dictionary', 'DictionaryController@store');
		Route::get('/', 'PagesController@home')->name('home');
		Route::get('/lectures', 'LecturesController@index')->name('lectures');
		Route::get('/lectures/{id}', 'LecturesController@show')->name('lectures.show');
		Route::get('/quiz', 'QuizController@quiz')->name('quiz');
		Route::get('/quiz/{theme}', 'QuizController@index')->name('theme');
		Route::get('/quiz/{theme}/{num}', 'QuizController@numb')->name('number');
		Route::get('/dictionary', 'DictionaryController@index')->name('dictionary');
		Route::get('/dictionary/create', 'DictionaryController@create')->name('dictionary.edit');
		Route::get('/pictures', 'PicturesController@index')->name('pictures');
		Route::get('/pictures/human', 'PicturesController@human');
		Route::get('/pictures/cell', 'PicturesController@cell');
		Route::get('/search', 'DictionaryController@search')->name('search');
		Route::get('/pictures/plants', 'PicturesController@plants');
});
