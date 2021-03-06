<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProductType extends Model
{
    //
    const TYPE = [
        'fixed' => '固定菜單',
        'limit' => '期間限定',
    ];
    protected $fillable = [
        'type', 'type_name',
    ];
    public function products(){
        return $this->hasMany(Product::class,'type_id','id');
    }
}
