<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['date','img','title','description','price','is_display','type_id'];

    public function type(){
        return $this->hasOne('app\newsType','id','type_id');
    }
}
