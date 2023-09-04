<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::view('/gewerbe', 'pages.business')->name('page.business');
Route::view('/wohnen', 'pages.living')->name('page.living');
Route::view('/kontakt', 'pages.contact')->name('page.contact');
Route::view('/projekt',  'pages.project')->name('page.project');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');

Route::get('/angebot', [PageController::class, 'offer'])->name('page.offer');




