<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    protected $table = 'payment_methods';
    protected $fillable = [
        'payment_method', 'details', 'method_api'
    ];
}
