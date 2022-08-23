<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferToAccountController extends Controller
{
    public function index()
    // $GET - READ
    {
        $transfer_to_accounts = \DB::select('
            SELECT * 
            FROM transfer_to_accounts
            -- ORDER BY created_at DESC
            ');

        return $transfer_to_accounts;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    // POST - CREATE
    {
        $transfer_to_accounts = \DB::insert('
            INSERT INTO transfer_to_accounts (id, title ) 
            VALUES (?, ?)',  [$request->id, $request->title]);

        return $transfer_to_accounts;
    }

    public function show($id)
    // GET (1) - READ
    {
        $transfer_to_accounts = \DB::select('
            SELECT * 
            FROM transfer_to_accounts
            WHERE id = :id', ['id' => $id]);

        return $transfer_to_accounts;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    // PUT - UPDATE
    {
        $title = $request->title;
        $transfer_to_accounts = \DB::update('
            UPDATE transfer_to_accounts 
            SET title = :title 
            WHERE id = :id', ['id'=>$id,'title'=> $title]);

        return $transfer_to_accounts;
    }

    public function destroy($id)
    //  DELETE
    {
        \DB::delete('
        DELETE FROM transfer_to_accounts
        WHERE id = :id', ['id'=>$id]);
    }
}