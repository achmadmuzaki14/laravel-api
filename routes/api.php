<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ProfileApiController;
// use App\Http\Controllers\API\ProductApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('products', [ProductApiController::class, 'index']);
Route::post('products', [ProductApiController::class, 'store']);
Route::get('products/{product}', [ProductApiController::class, 'show']);
Route::put('products/{product}', [ProductApiController::class, 'update']);
Route::delete('products/{product}', [ProductApiController::class, 'delete']);
 
// Profile
Route::get('profile', [ProfileApiController::class, 'index']);
Route::post('profile', [ProfileApiController::class, 'store']);
Route::get('profile/{profile}', [ProfileApiController::class, 'show']);
Route::put('profile/{profile}', [ProfileApiController::class, 'update']);
Route::delete('profile/{profile}', [ProfileApiController::class, 'delete']);

// Route::get('products', [ProductApiController::class, 'index']);

//API route for register new user
Route::post('/register', [AuthController::class, 'register']);
//API route for login user
Route::post('/login', [AuthController::class, 'login']);

Route::get('/profile', [ProfileApiController::class, 'index'])->name('profile.api.index');

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Route::get('/profile', function(Request $request) {
    //     return auth()->user();
    // });
    

    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Auth::routes();

// Route::get('articles', 'ArticleController@index');
// Route::get('articles/{id}', 'ArticleController@show');
// Route::post('articles', 'ArticleController@store');
// Route::put('articles/{id}', 'ArticleController@update');
// Route::delete('articles/{id}', 'ArticleController@delete');
// Route::post('register', 'Auth\RegisterController@register');