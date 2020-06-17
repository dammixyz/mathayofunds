<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardRate extends Model
{
    protected $fillable = [
        'card_id', 'country_id', 'rate'
    ];

    public function card(){
        return  $this->belongsTo(Card::class);
    }
    public function country(){
        return  $this->belongsTo(Country::class);
    }
    public function cardSellings(){
        return  $this->hasMany(CardSelling::class);
    }
}
