<?php

use Illuminate\Support\Facades\Route;

Route::get('/payment', 'mainController@payment') -> name('pagamenti');
Route::get('/payment-pending', 'mainController@paymentPending') -> name('pagamentiAttesi');
