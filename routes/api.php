<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CalendarFoodPackageController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\FoodPackageContorller;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'ability:app_access'])->group(function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/users/me', [UserController::class, 'me']);
    // GET CalendarFoodPackages as CATALOGS
    Route::get('/calendar-food-packages', CalendarFoodPackageController::class);
    // GET FoodPackage as CATALOG
    Route::get('/food-packages/{id}', [FoodPackageContorller::class, 'show']);
    // GET CARTS
    Route::get('/carts', [CartController::class, 'index']);
    // POST CART
    Route::post('/carts', [CartController::class, 'store']);
    // POST CHECKOUT
    // POST ORDER
    // GET HISTORY
    // POST POINT
});
