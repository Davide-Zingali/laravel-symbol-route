<?php

use Illuminate\Support\Facades\Route;

Route::get('/payment', 'mainController@payment');
Route::get('/payment-pending', 'mainController@paymentPending');
