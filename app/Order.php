<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'item_id',
        'customer_id',
        'location',
        'is_cancel',
        'quantity'
    ];
}
