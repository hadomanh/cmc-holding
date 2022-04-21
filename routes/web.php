<?php

use App\Http\Controllers\NewsController;
use App\Models\News;
use App\Http\Controllers\PressController;
use App\Models\Press;
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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::prefix('media')->group(function () {

    Route::get('/news', function () {
        $news = News::where('active', true)->get();
        return view('media.news')->with(compact('news'));
    })->name('media.news');

    Route::get('/news/{id}', function ($id) {
        $news = News::find($id);
        return view('media.news-detail')->with(compact('news'));
    })->name('media.news-detail');

    Route::get('/press', function () {
        $press = Press::where('active', true)->get();
        return view('media.press')->with(compact('press'));
    })->name('media.press');

    Route::get('/press/{id}', function ($id) {
        $press = Press::find($id);
        return view('media.press-detail')->with(compact('press'));
    })->name('media.press-detail');

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

    Route::get('/sec-filing', function () {return view('investor.sec-filing');})->name('investor.sec-filing');
    Route::get('/investor-detail', function () {return view('media.investor-detail');})->name('media.investor-detail');

});

Route::prefix('localization')->group(function () {

    Route::get('/{locale}', 'LocalizationController@setLocale')->name('localization.set');
    
});

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');

    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');

    Route::get('/press/toggle/{press}', [PressController::class, 'toggle'])->name('press.toggle');
    Route::post('/press/image', [PressController::class, 'imageUpload'])->name('press.image.upload');
    Route::resource('/press', 'PressController');
});
