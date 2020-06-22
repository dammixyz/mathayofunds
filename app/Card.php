<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
         'name', 'image',  'token',
    ];

    public function cardRate(){
        return  $this->hasMany(CardRate::class, 'card_id');
    }
    public function cardSellings(){
        return  $this->hasMany(CardSelling::class);
    }
    public function ecode(){
        return $this->hasOne(Ecode::class);
    }
}
