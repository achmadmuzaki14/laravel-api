<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.base');
});

// Route::get('product/add', [ProductController::class, 'create'])->name('product.create');
// Route::post('product/', [ProductController::class, 'store'])->name('product.store');

// Route::get('/product', [ProductController::class, 'index'])->name('product.index');


// Product
Route::get('products', [ProductController::class, 'index'])->name('product.index');
Route::post('products', [ProductController::class, 'store'])->name('product.store');
Route::get('products/add', [ProductController::class, 'create'])->name('product.create');
Route::get('products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('products/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('products/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');

// Profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/edit/{profile}', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('profile', [ProfileController::class, 'store'])->name('profile.store');
Route::get('profile/{profile}', [ProfileController::class, 'show'])->name('profile.show');
Route::put('profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('profile/{profile}', [ProfileController::class, 'destroy'])->name('profile.delete');
// Route::get('articles', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
//     return Article::all();
// });
 
// Route::get('articles/{id}', function($id) {
//     return Article::find($id);
// });

// Route::post('articles', function(Request $request) {
//     return Article::create($request->all);
// });

// Route::put('articles/{id}', function(Request $request, $id) {
//     $article = Article::findOrFail($id);
//     $article->update($request->all());

//     return $article;
// });

// Route::delete('articles/{id}', function($id) {
//     Article::find($id)->delete();

//     return 204;
// });

// Route::post('register', 'Auth\RegisterController@register');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
