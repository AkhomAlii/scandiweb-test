<?php

use App\Controllers\ProductsController;
use Core\Http\Route;

Route::get('/', [ProductsController::class, 'index']);
Route::post('/', [ProductsController::class, 'delete']);



Route::get('/add-product', [ProductsController::class, 'add']);
Route::post('/add-product', [ProductsController::class, 'store']);