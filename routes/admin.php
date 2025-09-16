<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TicketController;

Route::resource('categories', CategoryController::class);
Route::resource('tickets', TicketController::class);
