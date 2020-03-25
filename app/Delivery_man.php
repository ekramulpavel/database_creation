<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_man extends Model
{
    protected $table = 'deliver_man';
    protected $fillable = [
      'order_id', 'delivery_address'
    ];
}
