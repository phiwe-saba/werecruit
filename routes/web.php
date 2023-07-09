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

Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name("admin.index");


/* Admin Vancancies Routes*/
Route::get('/admin/vacancies', 'App\Http\Controllers\AdminVacancyController@index')->name("admin.vacancies.index");
Route::get('/admin/vacancies/create', 'App\Http\Controllers\AdminVacancyController@create')->name("admin.vacancies.create");
Route::post('/admin/vacancies', 'App\Http\Controllers\AdminVacancyController@store')->name("admin.vacancies.store");
Route::get('/admin/vacancies/{vacancy}', 'App\Http\Controllers\AdminVacancyController@show')->name('admin.vacancies.show');
Route::get('/admin/vacancies/{vacancy}/edit', 'App\Http\Controllers\AdminVacancyController@edit')->name('admin.vacancies.edit');
Route::delete('admin/vacancies/{id}', 'App\Http\Controllers\AdminVacancyController@destroy')->name("admin.vacancies.destroy");
Route::put('/admin/vacancies/{id}', 'App\Http\Controllers\AdminVacancyController@update')->name("admin.vacancies.update");


/* Applicants Route */
Route::get('/application', 'App\Http\Controllers\ApplicationController@index')->name("application.index");
Route::post('/application', 'App\Http\Controllers\ApplicationController@store')->name("application.store");

/*
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');*/