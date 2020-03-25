<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food_categories extends Model
{
    protected $table = 'food_categories';
    protected $fillable = [
        'food_category', 'category_description'
    ];
}
