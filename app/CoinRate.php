<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinRate extends Model
{
     protected $fillable = [
        'usd_rate', 'coin_id', 'token'
    ];

    public function coinBuyings(){
        return  $this->hasMany(CoinBuying::class);
    }
    public function coin(){
        return  $this->belongsTo(Coin::class);
    }
    public function coinSellings(){
        return  $this->hasMany(CoinSelling::class);
    }
    public static function getRate($id){
        $rate = CoinRate::where('coin_id', $id)->first();
        return $rate;
    }

}
