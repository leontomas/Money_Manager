<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeAccount;

class IncomeAccountController extends Controller
{
    public function index()
    {
        return IncomeAccount::orderBy('created_at', 'asc')->get();
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
        $incomeaccount = new IncomeAccount;
        $incomeaccount->title = $request->input('title');
        $incomeaccount->save();
        return $incomeaccount;
    }

    public function show($id)
    {
        return IncomeAccount::findorFail($id);
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
        $incomeaccount = IncomeAccount::findorFail($id);
        $incomeaccount->title = $request->input('title');
        $incomeaccount->save();
        return $incomeaccount;
    }

    public function destroy($id)
    {
        $incomeaccount = IncomeAccount::findorFail($id);
        if($incomeaccount->delete()){
            return 'deleted successfully';
        }
    }
}
