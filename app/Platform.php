<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'name', 'wallet_address', 'token', 'qr_code', 'coin_id'
    ];

    public function coin(){
        return  $this->belongsTo(Coin::class);
    }
    public function coinSellings(){
        return  $this->hasMany(CoinSelling::class);
    }

    public function coinBuyings(){
        return  $this->hasMany(CoinBuying::class);
    }
    public static function getCoinPlatforms($coin_id){
        return Platform::where('coin_id', $coin_id)->get();
    }
}
