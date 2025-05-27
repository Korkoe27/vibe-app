<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    /** @use HasFactory<\Database\Factories\SubcategoriesFactory> */
    use HasFactory;


    protected $table = 'subcategories';

    public function event(){
        return $this->hasMany(Event::class);
    }
}
