<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\companyprofileController;
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
})->name('homme');
Route::get('/company', function () {
    return view('company');
})->name('company');
Route::get('/test', function () {
    return view('test');
})->name('test');
Route::get('/complogin', function () {
    return view('complogin');
})->name('complogin');
Route::get('/companydashbord', function () {
    return view('companydashbord');
})->name('companydashbord');

Route::get('/companyprofile', function () {
    return view('companyprofile');
})->name('companyprofile')->middleware('auth:company');

Route::get('/company/logout', [CompanyController::class, 'Logout'])->name('company.logout');
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/registrercomp', [CompanyController::class, 'store'])->name('registercomp');
Route::post('/company/login', [CompanyController::class, 'login'])->name('company.login');
Route::get('/company/profile', [companyprofileController::class, 'show'])->name('companyprof');




