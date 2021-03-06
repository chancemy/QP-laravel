<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    //
    protected $fillable = ['photo','product_id',];
    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
