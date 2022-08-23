<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferFromAccountController extends Controller
{
    public function index()
    // $GET - READ
    {
        $transfer_from_accounts = \DB::select('
            SELECT * 
            FROM transfer_from_accounts
            -- ORDER BY created_at DESC
            ');

        return $transfer_from_accounts;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    // POST - CREATE
    {
        $transfer_from_accounts = \DB::insert('
            INSERT INTO transfer_from_accounts (id, title ) 
            VALUES (?, ?)',  [$request->id, $request->title]);

        return $transfer_from_accounts;
    }

    public function show($id)
    // GET (1) - READ
    {
        $transfer_from_accounts = \DB::select('
            SELECT * 
            FROM transfer_from_accounts
            WHERE id = :id', ['id' => $id]);

        return $transfer_from_accounts;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    // PUT - UPDATE
    {
        $title = $request->title;
        $transfer_from_accounts = \DB::update('
            UPDATE transfer_from_accounts 
            SET title = :title 
            WHERE id = :id', ['id'=>$id,'title'=> $title]);

        return $transfer_from_accounts;
    }

    public function destroy($id)
    //  DELETE
    {
        \DB::delete('
        DELETE FROM transfer_from_accounts
        WHERE id = :id', ['id'=>$id]);
    }
}