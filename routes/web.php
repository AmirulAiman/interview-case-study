<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SystemConfigController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Landing Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

//Dashboard Page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Product Route
Route::prefix('products')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/{product:slug}/details', [ProductController::class, 'show'])->name('product.show');
});


//Admin Route
Route::prefix('admin')->group(function() {
    Route::resource('role',RoleController::class);
    Route::prefix('system-configs')->group(function() {
        Route::get('/',[SystemConfigController::class,'index'])->name('system-config.index');
    });
    Route::prefix('brands')->group(function() {
        Route::get('/',[BrandController::class,'index'])->name('brand.index');
    });
    Route::prefix('categories')->group(function() {
        Route::get('/',[CategoryController::class,'index'])->name('category.index');
    });
    Route::resource('product', ProductController::class)->only(['create','store','edit','update','destroy']);
})->middleware(['auth'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Cart
Route::prefix('cart')->group(function() {
    Route::get('/', [CartController::class,'index'])->name('cart.index');
    Route::post('/create',[CartController::class,'store'])->name('cart.store');
    Route::put('/{cart}/update',[CartController::class,'update'])->name('cart.update');
    Route::get('/{cart}/detail', [CartController::class,'show'])->name('cart.show');
    Route::post('/checkout', [CartController::class,'checkout'])->name('cart.checkout');
    Route::get('/{product}/remove',[CartController::class,'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class,'clear'])->name('cart.clear');
    Route::get('/history/{filter?}',[CartController::class,'history'])->name('cart.history');
    
})->middleware(['auth']);

require __DIR__.'/auth.php';
