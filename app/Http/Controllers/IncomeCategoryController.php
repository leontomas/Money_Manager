<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;

class IncomeCategoryController extends Controller
{
    public function index()
    {
        return IncomeCategory::orderBy('created_at', 'asc')->get();
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
        $incomecategory = new IncomeCategory;
        $incomecategory->title = $request->input('title');
        $incomecategory->save();
        return $incomecategory;
    }

    public function show($id)
    {
        return IncomeCategory::findorFail($id);
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
        $incomecategory = IncomeCategory::findorFail($id);
        $incomecategory->title = $request->input('title');
        $incomecategory->save();
        return $incomecategory;
    }

    public function destroy($id)
    {
        $incomecategory = IncomeCategory::findorFail($id);
        if($incomecategory->delete()){
            return 'deleted successfully';
        }
    }
}
