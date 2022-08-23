<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;

class IncomeCategoryController extends Controller
{
        public function index()
    {
        $income_categories = \DB::select('
            SELECT * 
            FROM income_categories');

        return $income_categories;;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $income_categories = \DB::insert('
            INSERT INTO income_categories (id, title) 
            VALUES (?, ?)',  [$request->id, $request->title]);

        return $income_categories;
    }

    public function show($id)
    {
         $income_categories = \DB::select('
            SELECT * 
            FROM income_categories
            WHERE id = :id', ['id' => $id]);

        return $income_categories;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
         $title = $request->title;
        $income_categories = \DB::update('
            UPDATE income_categories 
            SET title = :title 
            WHERE id = :id', ['id'=>$id,'title'=> $title]);

        return $income_categories;
    }

    public function destroy($id)
    {
        \DB::delete('
        DELETE FROM income_categories
        WHERE id = :id', ['id'=>$id]);
    }
}
