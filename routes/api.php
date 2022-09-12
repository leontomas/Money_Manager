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

// 
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\TransferController;

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

// 
Route::resource('expenses', ExpenseController::class);
Route::resource('incomes', IncomeController::class);
Route::resource('transfers', TransferController::class);

