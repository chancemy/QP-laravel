<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = ['name','phone','email','subject','message','created_at','updated_at'];
}
