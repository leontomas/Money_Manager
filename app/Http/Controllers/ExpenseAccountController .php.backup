<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseAccount;

class ExpenseAccountController extends Controller
{
    public function index()
    {
        return ExpenseAccount::orderBy('created_at', 'asc')->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        $expenseaccount = new ExpenseAccount;
        $expenseaccount->title = $request->input('title');
        $expenseaccount->save();
        return $expenseaccount;
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
    {
        $this->validate($request, [
            'title' =>'required',
        ]);
        $expenseaccount = ExpenseAccount::findorFail($id);
        $expenseaccount->title = $request->input('title');
        $expenseaccount->save();
        return $expenseaccount;
    }

    public function destroy($id)
    {
        $expenseaccount = ExpenseAccount::findorFail($id);
        if($expenseaccount->delete()){
            return 'deleted successfully';
        }
    }
}
