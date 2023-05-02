<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobOfferController;
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

Route::get('/joboffers', function () {
    return view('joboffers');
})->name('joboffers');

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/complogin', function () {
    return view('complogin');
})->name('complogin');
Route::get('/companydashbord', function () {
    return view('companydashbord');
})->name('companydashbord');

Route::get('/applications', function () {
    return view('applications');
})->name('applications');

Route::get('/companyhome', function () {
    return view('companyhome');
})->name('companyhome')->middleware('auth:company');

Route::get('/company/logout', [CompanyController::class, 'Logout'])->name('company.logout');
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/registrercomp', [CompanyController::class, 'store'])->name('registercomp');
Route::post('/company/login', [CompanyController::class, 'login'])->name('company.login');
Route::get('/company/profile', [companyprofileController::class, 'show'])->name('companyprof');
Route::post('/company/profile/update', [companyProfileController::class, 'update'])->name('company.profile.update');
// Route::get('/company/joboffers', [CompanyController::class, 'jobOffers'])->name('company.joboffers');
Route::get('/joboffers', [JobOfferController::class, 'index'])->name('joboffers.index');
Route::post('/company/joboffers', [JobOfferController::class, 'store'])->name('joboffers.store');
Route::get('/joboffers', [JobOfferController::class, 'index'])->name('joboffers');
Route::delete('/joboffers/{id}', [JobOfferController::class, 'destroy'])->name('joboffers.destroy');
Route::get('/user/profile', [UserController::class, 'userProfile'])->name('user.profile')->middleware('auth');
Route::get('/user/profile', [UserController::class, 'userProfile'])->name('userprof');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');
Route::get('/jobs', [JobOfferController::class, 'showall'])->name('jobs.showall');
Route::get('/apply/{job}', [JobOfferController::class, 'apply'])->name('apply');



