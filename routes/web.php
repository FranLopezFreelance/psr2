<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Article;

Auth::routes();
//
// /* BACKEND CONTROLLERS */
Route::get('backend', 'BackendController@index');
Route::resource('backend/sections', 'SectionsController');
Route::resource('backend/contents', 'ContentsController');
Route::resource('backend/contacts', 'ContactsController');
Route::resource('backend/polls', 'PollsController');
Route::get('backend/contents/createBySection/{section}', 'ContentsController@createBySection');
Route::get('backend/contents/createBySection/{section}/{subSection}', 'ContentsController@createBySubSection');
Route::get('backend/contents/getBySection/{subSection}', 'ContentsController@getContentBySubSection');
Route::get('backend/tags/create/{tag}', 'ContentsController@addNewTag');
Route::post('backend/contents/editImage/{content}', 'ContentsController@editImage');
Route::post('backend/response/{contact}', 'ContactsController@response');
Route::get('/polls/selectCountry/{country}', 'PollsController@selectCountry');
Route::get('/polls/selectProvince/{province}', 'PollsController@selectProvince');
Route::post('/backend/observations/{poll}', 'PollsController@newObservation');

/* FRONT CONTROLLERS */

Route::get('/encuesta-psr', 'FrontController@encuestaPsr');

Route::get('/', 'FrontController@getIndex');
Route::get('/plataformapsr', 'FrontController@getIndexPlataforma');
Route::get('/moreHomeVideos', 'FrontController@getMoreHomeVideos');
Route::get('/search/{query}', 'FrontController@getContentsBySearch');
Route::get('/temas/{tag}', 'FrontController@getContentsByTag');
Route::get('/psr-en-los-medios', 'FrontController@getContentsofPrensa');
Route::get('/psr-en-los-medios/{content}', 'FrontController@getContent2');
Route::get('/psr-en-los-medios/{medio}', 'FrontController@getContentsByMedio');
Route::get('/libros', 'FrontController@getContentsOfLibros');
Route::get('/libros/{content}', 'FrontController@getContent2');
Route::get('/{section}', 'FrontController@getSection');
Route::get('/{section}/{subSection}', 'FrontController@getSubSection');
Route::get('/{section}/{subSection}/{content}', 'FrontController@getContent');
Route::post('storeContact', 'FrontController@storeContact');


// /* OTHERS BACKEND CONTROLLERS */
Route::get('backend/sections/{section}', 'SectionsController@getBySection');
Route::get('backend/contents/section/{section}', 'ContentsController@getBySection');
Route::get('backend/contents/subSection/{subSection}', 'ContentsController@getBySubSection');
