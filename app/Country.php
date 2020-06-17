<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable =[
      'name'
    ];

    public function cardRate(){
        return $this->hasOne(CardRate::class);
    }
    public function cardSellings(){
        return  $this->hasMany(CardSelling::class);
    }
}
