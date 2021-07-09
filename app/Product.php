<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['type_id','name','price','unit','img','discript','content','start_date','end_date',];
    public function type(){
        return $this->hasOne(ProductType::class,'id','type_id');
    }
    public function photos(){
        return $this->hasMany(Product::class,'product_id','id');
    }
}
