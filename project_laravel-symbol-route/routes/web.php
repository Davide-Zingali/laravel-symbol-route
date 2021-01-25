<?php

use Illuminate\Support\Facades\Route;

Route::get('home', 'newController@first') -> name('home');
Route::get('blog', 'newController@second') -> name('blog');
Route::get('about', 'newController@third') -> name('about');
