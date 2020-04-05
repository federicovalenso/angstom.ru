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
    return view('index');
})->name('index');
Route::get('doctors', function () {
    return view('doctors', ['doctors' => App\Doctor::all()]);
})->name('doctors');
Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('services', function () {
    return view('services', ['services' => App\Service::orderBy('code', 'asc')->paginate(30)]);
})->name('services');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
