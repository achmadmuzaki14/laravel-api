<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', [ArticleController::class, 'index']);
Route::post('articles', [ArticleController::class, 'store']);
Route::get('articles/{id}', [ArticleController::class, 'show']);
Route::put('articles/{id}', [ArticleController::class, 'update']);
Route::delete('articles/{id}', [ArticleController::class, 'delete']);
// Route::delete('register', [RegisterController::class, 'register']);

// Product
Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::put('products/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [AProductController::class, 'delete']);

//API route for register new user
Route::post('/register', [AuthController::class, 'register']);
//API route for login user
Route::post('/login', [AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Route::get('articles', 'ArticleController@index');
// Route::get('articles/{id}', 'ArticleController@show');
// Route::post('articles', 'ArticleController@store');
// Route::put('articles/{id}', 'ArticleController@update');
// Route::delete('articles/{id}', 'ArticleController@delete');
// Route::post('register', 'Auth\RegisterController@register');