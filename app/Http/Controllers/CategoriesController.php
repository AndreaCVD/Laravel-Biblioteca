<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    
    public function index(){
        $categories = DB::table('categories')->select('name')->get();

        return view('welcome',['categories' => $categories]);
    }

}