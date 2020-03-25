<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    protected $table = 'order_details';
    protected $fillable = [
        'qty', 'total_price', 'food_id', 'customer_id'
    ];
}
