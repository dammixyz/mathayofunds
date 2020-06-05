<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    //

    public function cardSelling(){
        return  $this->hasMany(CardSelling::class);
    }
}
