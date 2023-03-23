<?php

use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\AdminHomeController;
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

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/accDetails', [ProductController::class, 'show'])->name('products.show');
Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/update{id}', [AdminUserController::class, 'update'])->name('admin.users.update');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/accounts', [AdminAccountController::class, 'index'])->name('accounts.index');
    Route::get('/accounts/create', [AdminAccountController::class, 'create'])->name('accounts.create');
    Route::post('/accounts/store', [AdminAccountController::class, 'store'])->name('accounts.store');
    Route::get('/accounts/{id}/edit', [AdminAccountController::class, 'edit'])->name('accounts.edit');
    Route::put('/update{id}', [AdminAccountController::class, 'update'])->name('accounts.update');
});
