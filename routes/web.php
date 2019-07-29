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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/publicaciones', 'PublicationController@index')->name('publications.index');

Route::get('/publicacion/{id}', 'PublicationController@show')->name('publications.show');


Route::get('/tutores', 'MentorController@index')->name('mentors.index');

Route::get('/tutor/{id}', 'MentorController@show')->name('mentors.show');

Route::get('test/{researchLine}', function(\App\ResearchLine $researchLine){
    return view('debug', ['data' => $researchLine->load('descendants')]);
});
