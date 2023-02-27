<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany('\app\Models\Categories','book_category')
        ->withPivot('id');
    }

    public function books(){
        return $this->belongsToMany('\app\Models\Book','book_category')
        ->withPivot('id');
    }
}
