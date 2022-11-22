<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function category(){
        #id e category_id estao no padrao laravel
        return $this->belongsTo(Category::class);
    }
}
