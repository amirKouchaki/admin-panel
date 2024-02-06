<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', static function () {
    return view('tables');
});





Route::get('dashboard',static function () {
    return view('dashboard',
    [
        'user' => auth()->user()
    ]
    );
})->name('dashboard')->middleware("auth");

Route::get("tables",static function() {
    return view("tables");
})->name('tables');



