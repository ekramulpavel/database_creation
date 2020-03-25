<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food_details extends Model
{
    protected $table = 'food_details';
    protected $fillable = [
        'food_name', 'food_description', 'food_price', 'food_ingredients', 'food_category_id'
    ];

    public function getName(){
        return $this->hasOne('App\Food_categories', 'id','food_category_id');
    }
}
