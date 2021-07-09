<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['date','img','title','description','remarks','is_display','type_id'];

    public function type(){
        return $this->hasOne(NewsType::class,'id','type_id');
    }
}
