<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/dashboard', function () {
    return view('home.index');
})->name('dashboard');
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.home.index');
Route::get('/admin/dashboard', [AdminHomeController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/game/{slug}', [ProductController::class, 'index'])->name('products.index');
Route::get('/thong-tin-acc', [ProductController::class, 'show'])->name('products.show');
Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/update{id}', [AdminUserController::class, 'update'])->name('admin.users.update');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/accounts', [AdminCategoryController::class, 'index'])->name('accounts.index');
    Route::get('/accounts-lang-la/create', [AdminCategoryController::class, 'create'])->name('accounts-lang-la.create');
    Route::get('/accounts-ninja/create', [AdminCategoryController::class, 'add'])->name('accounts-ninja.create');
    Route::post('/accounts/store', [AdminCategoryController::class, 'store'])->name('accounts.store');
    Route::get('/accounts/{id}/edit', [AdminCategoryController::class, 'edit'])->name('accounts.edit');
    Route::get('/accounts-ninja/{id}/edit', [AdminCategoryController::class, 'edit_ninja'])->name('accounts-ninja.edit');
    Route::put('/update{id}', [AdminCategoryController::class, 'update'])->name('accounts.update');
    Route::put('/ninja/update{id}', [AdminCategoryController::class, 'update_ninja'])->name('accounts-ninja.update');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products/store', [AdminProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/update{id}', [AdminProductController::class, 'update'])->name('admin.products.update');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/services', [AdminServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/services/create', [AdminServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/services/store', [AdminServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/services/{id}/edit', [AdminServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/update{id}', [AdminServiceController::class, 'update'])->name('admin.services.update');
});
