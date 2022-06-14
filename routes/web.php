<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::get('about', [FrontendController::class, 'about_us']);
Route::get('bookNow', [FrontendController::class, 'bookNow']);
Route::get('ourservices', [FrontendController::class, 'ourservices']);
Route::get('doctors', [FrontendController::class, 'doctors']);
Route::get('mapOne', [FrontendController::class, 'mapOne']);
Route::get('mapTow', [FrontendController::class, 'mapTow']);
Route::get('review', [FrontendController::class, 'review']);
Route::get('contactUs', [FrontendController::class, 'contactUs']);
Route::get('branches', [FrontendController::class, 'branches']);
Route::get('formBooking', [FrontendController::class, 'formBooking']);




