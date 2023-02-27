<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function books(){
        return $this->belongsToMany('\App\Book','book_category')
        ->withPivot('id');
    }

    public function categories(){
        return $this->belongsToMany('\App\Categories','book_category')
        ->withPivot('id');
    }
}
