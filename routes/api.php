<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;

Route::prefix('collection')->group(function () {
    Route::get('/', [CollectionController::class, 'getAllCollections']);
    Route::post('/', [CollectionController::class, 'createCollection']);
    Route::get('/{id}', [CollectionController::class, 'getCollectionById']);
});

Route::prefix('product')->group(function () {
    Route::get('/{id}', [ProductController::class, 'getProductById']);
});
