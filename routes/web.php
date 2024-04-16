<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\User\ProductController as UserProductController;

use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\User\CommentController as UserCommentController;

use App\Http\Controllers\Admin\CompanyController as AdminCompanyController;
use App\Http\Controllers\User\CompanyController as UserCompanyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',  [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/products', UserProductController::class)
    ->middleware(['auth'])
    ->names('user.products')
    ->only(['index', 'show']);

Route::resource('/admin/products', AdminProductController::class)->middleware(['auth'])->names('admin.products');

Route::resource('/comments', UserCommentController::class)
    ->middleware(['auth'])
    ->names('user.comments')
    ->only(['index', 'show']);

Route::resource('/admin/comments', AdminCommentController::class)->middleware(['auth'])->names('admin.comments');

Route::resource('/companies', UserCompanyController::class)
    ->middleware(['auth'])
    ->names('user.companies')
    ->only(['index', 'show']);

Route::resource('/admin/companies', AdminCompanyController::class)->middleware(['auth'])->names('admin.companies');

require __DIR__.'/auth.php';
