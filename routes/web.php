<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoryController::class, 'showCategories']);

Route::get('/categories/{category}', [CategoryController::class, 'showCategory']);

Route::get('/products/{product}', [ProductController::class, 'showProduct']);

// Categories CRUD
// Show form
Route::get('/supervise/create-category', [CategoryController::class, 'createCategory']);
// Save data from form
Route::post('/supervise/save-category', [CategoryController::class, 'saveCategory']);

// Show all categories
Route::get('/supervise/retrieve-categories', [CategoryController::class, 'retrieveCategories']);
// Show a category
Route::get('/supervise/retrieve-category/{categoryId}', [CategoryController::class, 'retrieveCategory']);

// Show form to edit
Route::get('/supervise/edit-category/{categoryId}', [CategoryController::class, 'editCategory']);
// Save changes
Route::put('/supervise/update-category/{categroryId}', [CategoryController::class, 'updateCategory']);

// Delete category
Route::delete('/supervise/delete-category/{categoryId}', [CategoryController::class, 'deleteCategory']);

// Supervisor routes
Route::get('/supervise', function () {
    return view('supervisorDashboard');
});

Route::get('/supervise/transactions', function () {
    return view('transactions');
});

Route::get('/supervise/proposals', function () {
    return view('proposals');
});

// Users CRUD
Route::get('/supervise/create-user', [UserController::class, 'createUser']);

Route::post('/supervise/save-user', [UserController::class, 'saveUser']);

Route::get('/supervise/show-users', [UserController::class, 'showUsers']);

Route::get('/supervise/edit-user/{userId}', [UserController::class, 'editUser']);

Route::put('/supervise/update-user/{userId}', [UserController::class, 'updateUser']);

Route::get('/supervise/reset-user-password/{userId}', [UserController::class, 'resetUserPassword']);

Route::put('/supervise/save-user-password/{userId}', [UserController::class, 'saveUserPassword']);

// Sellers routes
Route::get('/supervise/show-sellers', [SellerController::class, 'showSellers']);

Route::get('/supervise/show-seller/{seller}', [SellerController::class, 'showSeller']);

Route::get('/supervise/product-kardex/{productId}', [ProductController::class, 'showProductKardex']);

// Manager routes
Route::get('/manager', function () {
    return view('managerDashboard');
});

Route::get('/manager/unconsigned-products', [ProductController::class, 'showUnconsignedProducts']);

Route::get('/manager/show-users', [UserController::class, 'showUsersToManager']);

Route::get('/manager/reset-user-password/{userId}', [UserController::class, 'resetUserPassword']);

Route::get('/manager/consign-products/{productId}', [ProductController::class, 'consignProduct']);

Route::put('/manager/accept-product/{product}', [ProductController::class, 'acceptProduct']);

Route::get('/manager/consigned-products', [ProductController::class, 'showConsignedProducts']);

Route::put('/manager/unconsign-products/{productId}', [ProductController::class, 'unconsignProduct']);

// Client routes
Route::post('/products/{productId}/questions', [QuestionController::class, 'saveQuestion']);
