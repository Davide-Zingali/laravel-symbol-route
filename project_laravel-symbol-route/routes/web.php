<?php

use Illuminate\Support\Facades\Route;

Route::get('home', 'newController@first') -> name('home2');
Route::get('blog', 'newController@second') -> name('blog2');
Route::get('about', 'newController@third') -> name('about2');
