<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn () => view('welcome'));

Route::get(
    '/hello',
    fn () => view('hello', [
        "name" => "Gol D Roger"
    ])
);
Route::get('/user', function () {
    return view('hello.user', [
        "name" => "Gol D Roger"
    ]);
});

Route::get(
    '/html-encode',
    function (Request $request) {
        return view("html-encoding", [
            "name" => $request->input("name")
        ]);
    }
);
