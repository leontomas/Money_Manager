<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;

class ExpenseCategoryController extends Controller
{
    public function index()
    {
        return ExpenseCategory::orderBy('created_at', 'asc')->get();
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
        $expensecategory = new ExpenseCategory;
        $expensecategory->title = $request->input('title');
        $expensecategory->save();
        return $expensecategory;
    }

    public function show($id)
    {
        return ExpenseCategory::findorFail($id);
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
        $expensecategory = ExpenseCategory::findorFail($id);
        $expensecategory->title = $request->input('title');
        $expensecategory->save();
        return $expensecategory;
    }

    public function destroy($id)
    {
        $expensecategory = ExpenseCategory::findorFail($id);
        if($expensecategory->delete()){
            return 'deleted successfully';
        }
    }
}
