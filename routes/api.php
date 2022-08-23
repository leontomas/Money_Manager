<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 
use App\Http\Controllers\ExpenseAccountController;
use App\Http\Controllers\ExpenseCategoryController;

// 
use App\Http\Controllers\IncomeAccountController;
use App\Http\Controllers\IncomeCategoryController;

// 
use App\Http\Controllers\TransferFromAccountController;
use App\Http\Controllers\TransferToAccountController;

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

// 
Route::resource('expenseaccounts', ExpenseAccountController::class);
Route::resource('expensecategory', ExpenseCategoryController::class);

// 
Route::resource('incomeaccounts', IncomeAccountController::class);
Route::resource('incomecategory', IncomeCategoryController::class);

// 
Route::resource('from', TransferFromAccountController::class);
Route::resource('to', TransferToAccountController::class);