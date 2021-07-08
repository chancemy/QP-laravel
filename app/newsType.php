<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsType extends Model
{
    protected $fillable = ['type'];

    public function news(){
        return $this->hasMany(News::class,'type_id','id');
    }
}
