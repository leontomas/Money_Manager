<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseAccount;

class ExpenseAccountController extends Controller
{
    public function index()
    // GET - READ
    {
        $expense_accounts = \DB::select('
            SELECT * 
            FROM expense_accounts
            -- ORDER BY created_at DESC
            ');

        return $expense_accounts;
    }

    public function create()
    {
        //
    }

    public function store(Request $request) 
    // POST - CREATE
    {
        $expense_accounts = \DB::insert('
            INSERT INTO expense_accounts (id, title) 
            VALUES (?, ?)', [$request->id, $request->title]);

        return $expense_accounts;
    }

    public function show($id)
    {
        $expense_accounts = \DB::select('
            SELECT * 
            FROM expense_accounts
            WHERE id = :id', ['id' => $id]);

        return $expense_accounts;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    // PUT - UPDATE
    {
        $title = $request->title;
        $expense_accounts = \DB::update('
            UPDATE expense_accounts 
            SET title = :title 
            WHERE id = :id', ['id'=>$id, 'title'=>$title]);

            return $expense_accounts;
    }

    public function destroy($id)
    //  DELETE
    {
        \DB::delete('
        DELETE FROM expense_accounts 
        WHERE id = :id', ['id'=>$id]);
    }
}
