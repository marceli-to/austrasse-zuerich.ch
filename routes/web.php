<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ApartmentController;

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

// Route::get('/', [PageController::class, 'index'])->name('page.home');
Route::view('/', 'pages.home')->name('page.home');
Route::get('/gewerbe', [BusinessController::class, 'index'])->name('page.business');
Route::get('/angebot', [ApartmentController::class, 'index'])->name('page.apartments');
Route::view('/wohnen', 'pages.living')->name('page.living');
Route::view('/kontakt', 'pages.contact')->name('page.contact');
Route::view('/projekt',  'pages.project')->name('page.project');
Route::view('/galerie',  'pages.gallery')->name('page.gallery');
Route::view('/qa',  'pages.qa')->name('page.qa');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');





