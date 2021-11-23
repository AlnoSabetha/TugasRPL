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
    return view('/auth/login');
});

//auth route for both
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for admin
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/dashboard/suratmasukadmin', 'App\Http\Controllers\SuratController@smAdmin')->name('dashboard.suratmasukadmin');
});

// for mahasiswa
Route::group(['middleware' => ['auth', 'role:mahasiswa']], function() {
    Route::get('/dashboard/buatsurat', 'App\Http\Controllers\SuratController@stMhs')->name('dashboard.buatsurat');
     Route::post('/dashboard/simpansurat', 'App\Http\Controllers\SuratController@simpan');
     Route::get('/dashboard/editsurat/{id}', 'App\Http\Controllers\SuratController@edit');
     Route::put('/dashboard/updatesurat/{id}', 'App\Http\Controllers\SuratController@updated');
     Route::get('/dashboard/suratmasukmhs', 'App\Http\Controllers\SuratController@smMhs')->name('dashboard.suratmasukmhs');
     Route::get('/dashboard/suratkeluar', 'App\Http\Controllers\SuratController@skMhs')->name('dashboard.suratkeluar');
     Route::get('/dashboard/pilihsurat', 'App\Http\Controllers\SuratController@pilihsrt')->name('dashboard.pilihsurat');
     Route::get('/dashboard/viewsurat/{id}', 'App\Http\Controllers\SuratController@svMhs');
});

require __DIR__.'/auth.php';
