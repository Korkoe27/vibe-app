<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriesFactory> */
    use HasFactory;


    public function event(){
        return $this->hasMany((Event::class),'categories_id','id');
    }

    public function subcategory(){
        return $this->hasMany(Event::class,'subcategories_id','id');
    }
}
