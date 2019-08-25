<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Artikel;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function () {
    return view('home');
});

// admin
Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/admin', function () {
            return view('admin.index');
        });
        Route::resource('kategori', 'KategoriController');
        Route::resource('tag', 'TagController');
        Route::resource('artikel', 'ArtikelController');
    }
);


Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/about', function () {
        return view('frontend.mag.about');
    });

    Route::get('/contact', function () {
        return view('frontend.mag.contact');
    });
    Route::get('/', function () {
        return view('frontend.mag.index');
    });
    Route::get('/about', function () {
        return view('frontend.mag.about');
    });
    Route::get('/blogpariwisata', function () {
        $artikel = Artikel::all();
        return view('frontend.mag.allblog', compact('artikel'));
    });
    Route::get('/kategori', function () {
        $artikel = Artikel::all();
        return view('frontend.mag.kategori', compact('artikel'));
    });

    Route::get('/', 'FrontendController@allblog')->name('all.blog');
    Route::get('/{artikel}', 'FrontendController@blogall')->name('blogall.blog');
    Route::get('/kategori/{cat}', 'FrontendController@blogcat')->name('cat.blog');
    Route::get('/tag/{tag}', 'FrontendController@blogtag')->name('tag.blog');
});
