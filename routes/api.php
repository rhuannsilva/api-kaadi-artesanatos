<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\EnsureTokenIsValid;

// Route::prefix('collection')->group(function () {
//     Route::get('/', [CollectionController::class, 'getAllCollections']);
//     Route::post('/', [CollectionController::class, 'createCollection']);
//     Route::get('/{id}', [CollectionController::class, 'getCollectionById']);
// });

// Route::prefix('product')->group(function () {
//     Route::get('/{id}', [ProductController::class, 'getProductById']);
// });


// Route::get('admin/profile', function () {

// })->middleware('jwt.auth');

// Route::group(['middleware' => ['jwt.auth']], function () {
//     Route::prefix('collection')->group(function () {
//         Route::get('/', [CollectionController::class, 'getAllCollections']);
//         Route::post('/', [CollectionController::class, 'createCollection']);
//         Route::get('/{id}', [CollectionController::class, 'getCollectionById']);
//     });
// });




Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware(EnsureTokenIsValid::class)->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'me']);
});

Route::get('getProductById/{id}', [ProductController::class, 'getProductById'])->middleware(EnsureTokenIsValid::class);