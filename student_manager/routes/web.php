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

use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('student')->group(function () {
    Route::get('index', 'StudentController@index')->name('student.index');
    Route::get('create', 'StudentController@create')->name('student.create');
    Route::post('store', 'StudentController@store')->name('student.store');
    Route::get('edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('update', 'StudentController@update')->name('student.update');
    Route::get('delete', 'StudentController@delete')->name('student.delete');
});
Route::prefix('teacher')->group(function () {
    Route::get('index', 'TeacherController@index')->name('teacher.index');
    Route::get('create', 'TeacherController@create')->name('teacher.create');
    Route::post('store', 'TeacherController@store')->name('teacher.store');
    Route::get('update/{id}', 'TeacherController@update')->name('teacher.update');
    Route::post('edit', 'TeacherController@edit')->name('teacher.edit');
    Route::get('delete/{id}','TeacherController@delete')->name('teacher.delete');
});
