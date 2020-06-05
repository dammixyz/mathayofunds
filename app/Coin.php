<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
     protected $fillable = [
        'name', 'image', 'token'
    ];
    public function coinBuyings(){
        return  $this->hasMany(CoinBuying::class);
    }
    public function coinRates(){
        return  $this->hasMany(CoinRate::class);
    }
    public function platforms(){
        return  $this->hasMany(Platform::class);
    }
}
