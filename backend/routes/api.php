<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbumPhotoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PhotographerAlbumController;
use App\Http\Controllers\PhotographerAlbumPhotoController;
use App\Http\Controllers\PhotographerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Photographers
Route::apiResource('photographers', PhotographerController::class, ['only' => ['index', 'show']]);
Route::apiResource('photographers.albums', PhotographerAlbumController::class, ['only' => ['index']]);
Route::apiResource('photographers.albums.photos', PhotographerAlbumPhotoController::class, ['only' => ['index']]);

// Albums
Route::apiResource('albums', AlbumController::class, ['only' => ['index', 'show']]);
Route::apiResource('albums.photos', AlbumPhotoController::class, ['only' => ['index']]);

// Photos
Route::apiResource('photos', PhotoController::class, ['only' => ['index', 'show']]);
