<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ------------------------------- admin routes -------------------------------------------

Route::middleware('auth')->group(function (){
    Route::resource('content', ContentController::class);
    Route::get('feedback', 'InformationController@index')->name('feedback');
});

// ------------------------------- admin routes -------------------------------------------



Route::resource('contact', ContactController::class);

Route::get('details', function (){
    $contents = \App\Content::all();
    return view('user.details.details', compact('contents'));
});

Route::get('logout', function (){
    Auth::logout();
    return redirect('/');
})->name('logout');
