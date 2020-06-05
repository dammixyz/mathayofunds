<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardRate extends Model
{
    protected $fillable = [
        'card_id', 'usd_rate', 'gbp_rate', 'eup_rate', 'cad_rate' , 'token',
    ];

    public function card(){
        return  $this->belongsTo(Card::class);
    }
    public function cardSellings(){
        return  $this->hasMany(CardSelling::class);
    }
}
