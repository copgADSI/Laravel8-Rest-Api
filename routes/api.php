<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/rest', 'ResetController@reset');
Route::get('/balance','BalanceController@show');
Route::post('/event', 'EventControlle4r@store');
