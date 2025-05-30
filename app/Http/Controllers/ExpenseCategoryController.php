<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;

class ExpenseCategoryController extends Controller
{
    public function index()
    // $GET - READ
    {
        $expense_categories = \DB::select('
            SELECT * 
            FROM expense_categories
            -- ORDER BY created_at DESC
            ');

        return $expense_categories;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    // POST - CREATE
    {
        $expense_categories = \DB::insert('
            INSERT INTO expense_categories (id, title
                -- , created_at, updated_at
                ) 
            VALUES (?, ?)',  [$request->id, $request->title
                // , $request->created_at, $request->update_at
            ]);

        return $expense_categories;
    }

    public function show($id)
    // GET (1) - READ
    {
        $expense_categories = \DB::select('
            SELECT * 
            FROM expense_categories
            WHERE id = :id', ['id' => $id]);

        return $expense_categories;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    // PUT - UPDATE
    {
        $title = $request->title;
        $expense_categories = \DB::update('
            UPDATE expense_categories 
            SET title = :title 
            WHERE id = :id', ['id'=>$id,'title'=> $title]);

        return $expense_categories;
    }

    public function destroy($id)
    //  DELETE
    {
        \DB::delete('
        DELETE FROM expense_categories
        WHERE id = :id', ['id'=>$id]);
    }
}
