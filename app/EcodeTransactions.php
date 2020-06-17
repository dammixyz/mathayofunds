<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EcodeTransactions extends Model
{
    protected $fillable = [
        'code', 'card_selling_id'
    ];

    public function cardSelling(){
        return $this->belongsTo(CardSelling::class);
    }
}
