<?php

use App\Http\Controllers\MovieController;
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


// ::class prints the FQCN, which is App\Http\Controllers\BookController
Route::get('/movies', [MovieController::class, 'index']);

Route::get('/Movies/{movie}', [MoiveController::class, 'show']);

// INDEX: list resources :check:
// SHOW: single resource :check:
// STORE: create a new resource
// UPDATE: updating a resource
// DESTROY: deleting / destroying a resource

Route::post('/movies', [MovieController::class, 'store']);

// PUT = the ENTIRE object must be provided, meaning any missing fields are updated to null
// PATCH = change whatever fields are provided, and leave the rest alone!

Route::patch('/movies/{movie}', [MovieController::class, 'update']);

// DELETE
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);