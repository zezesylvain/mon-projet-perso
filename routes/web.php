<?php

use App\Http\Controllers\DataController;
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
    return view('layouts.template');
});

Route::get('cv', function () {
    return view('cv');
})->name('mon-cv');
/*
Route::get('{slug}.html', function ($slug) {
    return view("pages.$slug");
});
//*/
Route::get('etic.html', [DataController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
