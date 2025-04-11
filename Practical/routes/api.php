<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// Routes for Product
Route::post('/products', [ProductController::class, 'store']);

// Routes for Category
Route::apiResource('categories', CategoryController::class);
