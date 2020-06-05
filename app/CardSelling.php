<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardSelling extends Model
{
    protected $fillable = [
        'card_id', 'amount', 'card_rate_id', 'denomination_id', 'payment_proof' , 'status',
        'platform_payment_proof' , 'user_id', 'token'
    ];

    public function card(){
        return  $this->belongsTo(Card::class);
    }
    public function cardRate(){
        return  $this->belongsTo(CardRate::class);
    }
    public function denomination(){
        return  $this->belongsTo(Denomination::class);
    }
    public function user(){
        return  $this->belongsTo(User::class);
    }
}
