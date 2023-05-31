<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    // return 'About page';
    return view('about');
});

Route::get('/post', function () {
    // retutrn 'Post page';
    return view('post');
});

Route::get('/proflie', function () {
    // retutrn 'Proflie page';
    return view('proflie');
});

Route::get('/contact', function () {
    // retutrn 'Proflie page';
    return view('contact');
});

route::view('link','/link');
