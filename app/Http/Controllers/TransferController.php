<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index(){
    // GET (ALL) - READ
        $transfers = \DB::select('
            SELECT * 
            FROM transfers
            ');

        return $transfers;
    }

    public function create(){
        //

    }

    public function store(Request $request){
    //POST - CREATE
        $transfers = \DB::insert('
            INSERT INTO transfers(
                id, 
                created_at,
                transfer_accounts_id, 
                transfer_categories_id,
                 amount,   
                 note, 
                 description)
            VALUES(?,?,?,?,?,?,?)',[
                $request->id, 
                $request->created_at,
                $request->transfer_accounts_id,
                $request->transfer_categories_id,
                $request->amount,
                $request->note,
                $request->description
            ]);

        return $transfers;
    }

    public function show($id){
    // GET (1) - READ         
        $transfers = \DB::select('
            SELECT * 
            -- transfers.created_at, transfer_accounts.title, transfer_categories.title, amount, note, description 
            FROM transfers 
            -- INNER JOIN transfer_accounts ON transfers.transfer_accounts_id = transfer_accounts.id 
            -- INNER JOIN transfer_categories ON transfers.transfer_categories_id = transfer_categories.id
            WHERE transfers.id = :id', ['id' => $id]);

        return $transfers;
    } 

    public function edit($id){
    //

    }

    public function update(Request $request, $id){
    // PUT - UPDATE

        $transfer_accounts_id = $request->transfer_accounts_id;
        $transfer_categories_id = $request->transfer_categories_id;
        $amount = $request->amount;
        $note = $request->note;
        $description = $request->description;
        $transfers = \DB::update('
            UPDATE transfers
            SET 
                transfer_accounts_id = :transfer_accounts_id, 
                transfer_categories_id = :transfer_categories_id,
                amount = :amount,   
                note = :note, 
                description = :description
            WHERE id = :id', 
            [  'id'=>$id, 
                'transfer_accounts_id'=>$transfer_accounts_id,
                'transfer_categories_id'=>$transfer_categories_id,
                'amount'=>$amount,
                'note'=>$note,
                'description'=>$description
            ]);
        return $transfers;
    }

    public function destroy($id){
    //DELETE
        \DB::delete('
        DELETE FROM transfers
        WHERE id = :id', ['id'=>$id]);

        // return back()->with('success', 'PostDeleted!');
    }
}
