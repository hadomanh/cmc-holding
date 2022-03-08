<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
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
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::prefix('media')->group(function () {

    Route::get('/news', function () {
        return view('media.news');
    })->name('media.news');

    Route::get('/press', function () {
        return view('media.press');
    })->name('media.press');

    Route::get('/investor-news', function () {
        return view('media.investor-news');
    })->name('media.investor-news');

});

Route::prefix('investor')->group(function () {

    Route::get('/finance', function () {
        return view('investor.finance');
    })->name('investor.finance');

    Route::get('/internal', function () {
        return view('investor.internal');
    })->name('investor.internal');

    Route::get('/sec-filing', function () {
        return view('investor.sec-filing');
    })->name('investor.sec-filing');

});

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});
