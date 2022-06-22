<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\postsController;
use App\Http\Controllers\Admin\servicesCategoriesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\beforeAfterController;
use App\Http\Controllers\Admin\doctorsController;
use App\Http\Controllers\Admin\videosController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/register', function () {
    return view('auth.login');
});








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ==================================================================
Route::middleware(['auth'])->prefix('admin')->group(function ()
{
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('servicesCategories')->group(function()
    {
        Route::get('/', [servicesCategoriesController::class, 'index'])->name('servicesCategories.index');
        Route::get('/create', [servicesCategoriesController::class, 'create'])->name('servicesCategories.create');
        Route::post('/store', [servicesCategoriesController::class, 'store'])->name('servicesCategories.store');
        Route::get('/edit/{id}', [servicesCategoriesController::class, 'edit'])->name('servicesCategories.edit');
        Route::post('/update/{id}', [servicesCategoriesController::class, 'update'])->name('servicesCategories.update');
        Route::delete('/delete', [servicesCategoriesController::class, 'delete'])->name('servicesCategories.delete');
        Route::get('/softDelete', [servicesCategoriesController::class, 'softDelete'])->name('servicesCategories.softDelete');
        Route::delete('/restore', [servicesCategoriesController::class, 'restore'])->name('servicesCategories.restore');
    });

    Route::prefix('posts')->group(function()
    {
        Route::get('/', [postsController::class, 'index'])->name('posts.index');
        Route::get('/create', [postsController::class, 'create'])->name('posts.create');
        Route::get('/subCategories', [postsController::class, 'subCategories'])->name('posts.subCategories');
        Route::post('/store', [postsController::class, 'store'])->name('posts.store');
        Route::get('/show/{id}', [postsController::class, 'show'])->name('posts.show');
        Route::get('/edit/{id}', [postsController::class, 'edit'])->name('posts.edit');
        Route::post('/update/{id}', [postsController::class, 'update'])->name('posts.update');
        Route::delete('/delete', [postsController::class, 'delete'])->name('posts.delete');
        Route::get('/softDelete', [postsController::class, 'softDelete'])->name('posts.softDelete');
        Route::delete('/restore', [postsController::class, 'restore'])->name('posts.restore');
        Route::post('/deleteImages/{id}', [postsController::class, 'deleteImages'])->name('posts.deleteImages');
    });

    Route::prefix('beforeAfter')->group(function()
    {
        Route::get('/', [beforeAfterController::class, 'index'])->name('beforeAfter.index');
        Route::get('/create', [beforeAfterController::class, 'create'])->name('beforeAfter.create');
        Route::get('/subCategories', [beforeAfterController::class, 'subCategories'])->name('beforeAfter.subCategories');
        Route::post('/store', [beforeAfterController::class, 'store'])->name('beforeAfter.store');
        Route::get('/edit/{id}', [beforeAfterController::class, 'edit'])->name('beforeAfter.edit');
        Route::post('/update/{id}', [beforeAfterController::class, 'update'])->name('beforeAfter.update');
        Route::delete('/delete', [beforeAfterController::class, 'delete'])->name('beforeAfter.delete');
    });

    Route::prefix('doctors')->group(function()
    {
        Route::get('/', [doctorsController::class, 'index'])->name('doctors.index');
        Route::get('/create', [doctorsController::class, 'create'])->name('doctors.create');
        Route::post('/store', [doctorsController::class, 'store'])->name('doctors.store');
        Route::get('/edit/{id}', [doctorsController::class, 'edit'])->name('doctors.edit');
        Route::post('/update/{id}', [doctorsController::class, 'update'])->name('doctors.update');
        Route::delete('/delete', [doctorsController::class, 'delete'])->name('doctors.delete');
        Route::get('/softDelete', [doctorsController::class, 'softDelete'])->name('doctors.softDelete');
        Route::delete('/restore', [doctorsController::class, 'restore'])->name('doctors.restore');
    });


    Route::prefix('videos')->group(function()
    {
        Route::get('/', [videosController::class, 'index'])->name('videos.index');
        Route::get('/create', [videosController::class, 'create'])->name('videos.create');
        Route::get('/subCategories', [videosController::class, 'subCategories'])->name('videos.subCategories');
        Route::post('/store', [videosController::class, 'store'])->name('videos.store');
        Route::get('/edit/{id}', [videosController::class, 'edit'])->name('videos.edit');
        Route::post('/update/{id}', [videosController::class, 'update'])->name('videos.update');
        Route::delete('/delete', [videosController::class, 'delete'])->name('videos.delete');
    });
});
// ==================================================================
// START FRONT END ROUTS
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function ()
    {
        Route::get('/', [frontEndController::class, 'welcome'])->name('welcome.frontEnd');

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
    });



// END FRONT END ROUTES


