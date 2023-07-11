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
    $name = 'Davideee';
    $lastname = "Pescee";
    $ids = [
        "Home",
        "Prices",
        "About Us",
        "Contact",
    ];
    return view('myFolder.HelloWorld', compact('name', 'lastname', 'ids'));
});

Route::get('/Header', function () {
    return view('MyFolder.Header');
});
