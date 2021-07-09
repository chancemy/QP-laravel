<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class productType extends Model
{
    //
    const TYPE = [
        'fixed' => '固定菜單',
        'limit' => '期間限定',
    ];
    protected $fillable = [
        'type', 'type_name',
    ];
}
