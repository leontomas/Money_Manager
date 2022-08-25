<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index(){
    // GET (ALL) - READ
        $incomes = \DB::select('
            SELECT * 
            FROM incomes
            ');

        return $incomes;
    }

    public function create(){
        //

    }

    public function store(Request $request){
    //POST - CREATE
        $incomes = \DB::insert('
            INSERT INTO incomes(
                id, 
                created_at,
                income_accounts_id, 
                income_categories_id,
                 amount,   
                 note, 
                 description)
            VALUES(?,?,?,?,?,?,?)',[
                $request->id, 
                $request->created_at,
                $request->income_accounts_id,
                $request->income_categories_id,
                $request->amount,
                $request->note,
                $request->description
            ]);

        return $incomes;
    }

    public function show($id){
    // GET (1) - READ         
        $incomes = \DB::select('
            SELECT * 
            -- incomes.created_at, income_accounts.title, income_categories.title, amount, note, description 
            FROM incomes 
            -- INNER JOIN income_accounts ON incomes.income_accounts_id = income_accounts.id 
            -- INNER JOIN income_categories ON incomes.income_categories_id = income_categories.id
            WHERE incomes.id = :id', ['id' => $id]);

        return $incomes;
    } 

    public function edit($id){
    //

    }

    public function update(Request $request, $id){
    // PUT - UPDATE

        $income_accounts_id = $request->income_accounts_id;
        $income_categories_id = $request->income_categories_id;
        $amount = $request->amount;
        $note = $request->note;
        $description = $request->description;
        $incomes = \DB::update('
            UPDATE incomes
            SET 
                income_accounts_id = :income_accounts_id, 
                income_categories_id = :income_categories_id,
                amount = :amount,   
                note = :note, 
                description = :description
            WHERE id = :id', 
            [  'id'=>$id, 
                'income_accounts_id'=>$income_accounts_id,
                'income_categories_id'=>$income_categories_id,
                'amount'=>$amount,
                'note'=>$note,
                'description'=>$description
            ]);
        return $incomes;
    }

    public function destroy($id){
    //DELETE
        \DB::delete('
        DELETE FROM incomes
        WHERE id = :id', ['id'=>$id]);

        // return back()->with('success', 'PostDeleted!');
    }
}
