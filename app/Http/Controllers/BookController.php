<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    
    public function index(){
        $books = DB::table('books')->paginate(5);
        $categories = DB::table('categories')->select('name')->get();

        return view('index',['books' => $books, 'categories' => $categories]);
    }

    public function show($id){
        $book = DB::table('books')->find($id);

        return view('show',['id' => $id, "book" => $book]);
    }
}
