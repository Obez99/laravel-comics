<?php

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
    $comics_data = config("comics");
    return view('home.comics', [
        "comics_list" => $comics_data
    ]);
})->name("home.comics");

Route::get('/comics/{id}', function ($id) {
    $comics_data = config("comics");
    if ($id >= count($comics_data) || $id < 0 || !is_numeric($id))
        abort(404);

    return view('comic_page.comic_details', [
        "comic" => $comics_data[$id]
    ]);
})->name("comic_page.comic_details");
