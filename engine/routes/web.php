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
    return redirect()->route('user.login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function()
{
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::resource('registant', 'RegistantController');
    Route::get('registant/buktiKelengkapan/{index}/{id}', 'RegistantController@showKelengkapan')->name('registant.kelengkapan');
    Route::get('registant/buktiKompetensi/{index}/{id}', 'RegistantController@showKompetensi')->name('registant.kompetensi');
    Route::get('/registant/cluster/{id}', 'RegistantController@showCluster');
    Route::get('/registant/competency/{id}', 'RegistantController@showCompetency');
    Route::resource('assessor', 'AssessorController');
    Route::resource('scheme', 'SchemeController');
    Route::resource('competency', 'CompetencyController');
    Route::resource('participant', 'ParticipantController');
    Route::get('participant/apl/02/detail/{id_participant}/{id_cluster}', 'ParticipantController@detailApl02')->name('participant.apl02');
    Route::post('participant/apl/02/detail/{id_participant}/{id_asesor}', 'ParticipantController@detailApl02store')->name('participant.apl02.store');
    Route::post('participant/finish', 'ParticipantController@finish')->name('participant.finish');
    Route::resource('element', 'ElementController');
    Route::resource('question', 'QuestionController');
    Route::get('print/{id_participant}', 'PrintController@printAssignment')->name('print.assignment');
    Route::get('print/apl/02/{id_participant}/{id_cluster}/{id_asesor}', 'PrintController@printForm')->name('print.form');
});

Route::get('/login', 'AuthController@login')->name('user.login');
Route::get('/logout', 'AuthController@logout')->name('user.logout');
Route::post('/loginPost', 'AuthController@loginPost')->name('user.login.post');
Route::get('/register', 'AuthController@register')->name('user.register');
Route::get('/register/apl/02/{id_cluster}/{token}', 'AuthController@register02')->name('user.register02');
Route::post('/register/apl/02/{id_cluster}/{token}', 'AuthController@register02store')->name('user.register02.store');