<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeAccount;

class IncomeAccountController extends Controller
{
    public function index()
    {
        $income_accounts = \DB::select('
            SELECT * 
            FROM income_accounts');

        return $income_accounts;;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $income_accounts = \DB::insert('
            INSERT INTO income_accounts (id, title) 
            VALUES (?, ?)',  [$request->id, $request->title]);

        return $income_accounts;
    }

    public function show($id)
    {
         $income_accounts = \DB::select('
            SELECT * 
            FROM income_accounts
            WHERE id = :id', ['id' => $id]);

        return $income_accounts;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
         $title = $request->title;
        $income_accounts = \DB::update('
            UPDATE income_accounts 
            SET title = :title 
            WHERE id = :id', ['id'=>$id,'title'=> $title]);

        return $income_accounts;
    }

    public function destroy($id)
    {
        \DB::delete('
        DELETE FROM income_accounts
        WHERE id = :id', ['id'=>$id]);
    }
}
