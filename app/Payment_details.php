<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_details extends Model
{
    protected $table = 'payment_details';
    protected $fillable = [
        'payment_method_id', 'order_id'
    ];
}
