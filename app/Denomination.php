<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    protected $fillable =[
        'value', 'token'
    ];

    public function cardSelling(){
        return  $this->hasMany(CardSelling::class);
    }
}
