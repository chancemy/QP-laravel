<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $fillable = ['type_name'];

    public function news(){
        return $this->hasMany(News::class,'type_id','id');
    }
}
