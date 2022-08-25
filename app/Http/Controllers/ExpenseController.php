<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(){
    // GET (ALL) - READ
        $expenses = \DB::select('
            SELECT *
            -- expenses.created_at, expense_accounts.title, expense_categories.title, amount, note, description 
            FROM expenses 
            -- JOIN expense_accounts ON expenses.expense_accounts_id = expense_accounts.id 
            -- JOIN expense_categories ON expenses.expense_categories_id = expense_categories.id'
        );

        return $expenses;
    }

    public function create(){
        //

    }

    public function store(Request $request){
    //POST - CREATE
        $expenses = \DB::insert('
            INSERT INTO expenses(
                id, 
                created_at,
                expense_accounts_id, 
                expense_categories_id,
                 amount,   
                 note, 
                 description)
            VALUES(?,?,?,?,?,?,?)',[
                $request->id, 
                $request->created_at,
                $request->expense_accounts_id,
                $request->expense_categories_id,
                $request->amount,
                $request->note,
                $request->description
            ]);

        return $expenses;
    }

    public function show($id){
    // GET (1) - READ         
        $expenses = \DB::select('
            SELECT * 
            -- expenses.created_at, expense_accounts.title, expense_categories.title, amount, note, description 
            FROM expenses 
            -- INNER JOIN expense_accounts ON expenses.expense_accounts_id = expense_accounts.id 
            -- INNER JOIN expense_categories ON expenses.expense_categories_id = expense_categories.id
            WHERE expenses.id = :id', ['id' => $id]);

        return $expenses;
    } 

    public function edit($id){
    //

    }

    public function update(Request $request, $id){
    // PUT - UPDATE

        $expense_accounts_id = $request->expense_accounts_id;
        $expense_categories_id = $request->expense_categories_id;
        $amount = $request->amount;
        $note = $request->note;
        $description = $request->description;
        $expenses = \DB::update('
            UPDATE expenses
            SET 
                expense_accounts_id = :expense_accounts_id, 
                expense_categories_id = :expense_categories_id,
                amount = :amount,   
                note = :note, 
                description = :description
            WHERE id = :id', 
            [  'id'=>$id, 
                'expense_accounts_id'=>$expense_accounts_id,
                'expense_categories_id'=>$expense_categories_id,
                'amount'=>$amount,
                'note'=>$note,
                'description'=>$description
            ]);
        return $expenses;
    }

    public function destroy($id){
    //DELETE
        \DB::delete('
        DELETE FROM expenses
        WHERE id = :id', ['id'=>$id]);

        // return back()->with('success', 'PostDeleted!');
    }
}
