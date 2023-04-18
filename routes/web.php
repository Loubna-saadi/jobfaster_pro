<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/company', function () {
    return view('company');
})->name('company');
Route::get('/test', function () {
    return view('test');
})->name('test');
Route::get('/complogin', function () {
    return view('complogin');
})->name('complogin');
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/registrercomp', [CompanyController::class, 'store'])->name('registercomp');
Route::post('/company/login', 'App\Http\Controllers\CompanyController@login')->name('company.login');



