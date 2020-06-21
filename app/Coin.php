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
    public function coinSellings(){
        return  $this->hasMany(CoinSelling::class);
    }
    public function coinRates(){
        return  $this->hasMany(CoinRate::class);
    }
    public function platforms(){
        return  $this->hasMany(Platform::class);
    }
    public static function getCoins(){
        return Coin::get();
    }
    public static function getBitCoin(){
        return Coin::where('name', 'Bitcoin')->first();
    }
    public static function getEthereum(){
        return Coin::where('name', 'Ethereum')->first();
    }
}
