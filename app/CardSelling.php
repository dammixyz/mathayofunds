<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardSelling extends Model
{
    protected $fillable = [
        'card_id', 'amount_payable', 'rate', 'denomination_id', 'payment_proof' , 'status', 'user_transaction_approval',
        'platform_payment_proof' , 'user_id', 'token', 'country_id', 'other_country', 'sell_option_id'
        , 'receipt_type'
    ];

    public function card(){
        return  $this->belongsTo(Card::class);
    }
    public function country(){
        return  $this->belongsTo(Country::class, 'country_id');
    }
    public function denomination(){
        return  $this->belongsTo(Denomination::class);
    }
    public function user(){
        return  $this->belongsTo(User::class);
    }
    public function ecodeTransactions(){
        return  $this->hasOne(EcodeTransactions::class);
    }
    public function imageuploads(){
        return  $this->hasMany(ImageUpload::class);
    }
}
