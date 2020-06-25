<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinBuying extends Model
{
     protected $fillable = [
        'amount', 'buying_rate', 'coin_rate_id', 'coin_id', 'coin_wallet' , 'token', 'status', 'reason', 'link', 'payment_proof',
        'platform_payment_proof', 'user_id', 'coin_value', 'platform_id'
    ];

    public function coinRate(){
        return  $this->belongsTo(CoinRate::class);
    }
    public function coin(){
        return  $this->belongsTo(Coin::class);
    }
    public function user(){
        return  $this->belongsTo(User::class);
    }

    public function platform(){
        return  $this->belongsTo(Platform::class);
    }
}
