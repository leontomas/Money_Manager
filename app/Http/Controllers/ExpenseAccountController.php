<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseAccount;

class ExpenseAccountController extends Controller
{
    public function index()
    // GET
    {
        // return ExpenseAccount::orderBy('created_at', 'asc')->get();
        $expense_accounts = \DB::select('
                SELECT * 
                FROM expense_accounts
                ORDER BY created_at DESC');

        return $expense_accounts;
        // dd($expense_accounts);
    }

    public function create()
    {
        //
    }

    public function store(Request $request) 
    // POST
    {
        $expense_accounts = \DB::insert('
            INSERT into expense_accounts (id, title) VALUES (?, ?)', 
            [$request->id, $request->title]);

        return $expense_accounts;

        /*$this->validate($request, [
            'title' => 'required'
        ]);
        $expenseaccount = new ExpenseAccount;
        $expenseaccount->title = $request->input('title');
        $expenseaccount->save();
        return $expenseaccount;*/
    }

    public function show($id)
    {
        return ExpenseAccount::findorFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    // UPDATE
    {
        $expense_accounts = \DB::update('
            UPDATE expense_accounts 
            set title = ? 
            WHERE id = ?', [$request->title, $request->id]);
            
            // dd($expense_accounts); // true
            return $expense_accounts;

        /*$this->validate($request, [
            'title' =>'required',
        ]);
        $expenseaccount = ExpenseAccount::findorFail($id);
        $expenseaccount->title = $request->input('title');
        $expenseaccount->save();
        return $expenseaccount;*/
    }

    public function destroy($id)
    //  DELETE
    {
        \DB::delete('
        DELETE from expense_accounts 
        WHERE id = ?', [$request->id]);

        /*$expenseaccount = ExpenseAccount::findorFail($id);
        if($expenseaccount->delete()){
            return 'deleted successfully';*/
    }
}
