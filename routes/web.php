<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IncomeController;
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

Route::get('/', function() {
    $incomes = DB::table('incomes')->sum('amount');
    $expenses = DB::table('expenses')->sum('amount');
    $total = ($incomes - $expenses);
    return view('welcome',compact('incomes', 'expenses', 'total'));
});


Route::get('/', [IncomeController::class, 'total']);
/*Route::get('/', function () {
    // get data from db
    return view('welcome', [
        'incometotal' => 'Total Income', 
        'totalExpense' => 'Total Expense', 
        'total' => 'Total']);
});*/


/*Route::get('/', function() {
    return view('welcome');
});*/