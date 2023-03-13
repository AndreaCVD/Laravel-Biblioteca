<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index(){
        $books = DB::table('books')->paginate(5);

        return view('index',['books' => $books]);
    }

    public function show($id){
        $book = DB::table('books')->find($id);

        return view('show',['id' => $id, "book" => $book]);
    }
}
