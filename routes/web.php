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
    $comics = config('comics');

    $data = [
        'comics' => $comics
    ];

    return view('home', $data);
})->name('home');

Route::get('/single-comic/{id}', function ($id) {
    $comics = config('comics');

    $comicInfo = [];
    foreach($comics as $comic) {
        if($comic['id'] === (int) $id) {
            $comicInfo = $comic;
        }
    }

    if(empty($comicInfo)) {
        abort('404');
    }

    $data = [
        'comicInfo' => $comicInfo
    ];    

    return view('single', $data);
})->name('single');


