<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/vacancies', 'App\Http\Controllers\VacancyController@index')->name("vacancies.index");
Route::get('/vacancies/{id}', 'App\Http\Controllers\VacancyController@show')->name("vacancies.show");

Route::get('/admin/vacancy', 'App\Http\Controllers\AdminVacancyController@index')->name("admin.vacancy.index");