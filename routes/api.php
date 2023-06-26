<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


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


Route::prefix('v1')->group(function () {
    Route::post('/registeruser',  [UsersController::class, 'register']);
    Route::post('/loginuser',  [UsersController::class, 'login']);
});

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', [UsersController::class, 'index']);

    // Route::post('/authors', [AuthorsController::class, 'store']);
    // //USE THE RESOURCE TYPE
    // Route::apiResource('/authors',AuthorsController::class);
    // Route::apiResource('/books',BooksController::class);
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::post('/register', [UsersController::class, 'register']);
// Route::post('/register', [UsersController::class, 'register']);


