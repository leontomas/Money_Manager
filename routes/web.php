<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\GrandTotalController;

// Different Way of Passing Data to Views, Bad Practice
Route::get('/', function() {
    $incomes = DB::table('incomes')->sum('amount');
    $expenses = DB::table('expenses')->sum('amount');
    $total = ($incomes - $expenses);
    return view('welcome', compact('incomes', 'expenses', 'total'));
});

//  Route::get('/', function () {
//     // get data from db
//     return view('welcome', [
//         'incometotal' => 'Total Income', 
//         'totalExpense' => 'Total Expense', 
//         'total' => 'Total']);
// });

// Route for grandtotal function
/*Route::get('/', [GrandTotalController::class, 'grandtotal']);*/

/*Route::get('/', function() {
    return view('welcome');
});*/