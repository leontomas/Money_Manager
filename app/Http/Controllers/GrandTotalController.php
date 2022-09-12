<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrandTotalController extends Controller
{
    /*
    public function grandtotal(){     
        $incomes = DB::select('
            SELECT SUM(amount) as amount
            FROM incomes');

         $expenses = DB::select('
            SELECT SUM(amount)  as amount
            FROM expenses');

        return view('welcome', [
            'income'=>$incomes[0]->amount,
            'expense' =>$expenses[0]->amount,
        ]);
    } */              

}
