<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodicityController extends Controller
{
   /* public function weekly(){
        // GET Data by Week
        $weekly = DB::select('
            SELECT *
            FROM incomes
            WHERE id IN (SELECT id
                                        FROM incomes
                                        WHERE datetime = (SELECT MAX(datetime)
                                                                                FROM incomes))
            ORDER BY id DESC
            LIMIT 1
            ');

        return $weekly;
    }  */           

}
