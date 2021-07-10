<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'old_data',
    ];
    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }
}
