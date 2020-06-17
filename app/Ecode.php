<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecode extends Model
{
    protected $fillable = [
        'card_id', 'rate'
    ];

    public function card(){
        return $this->belongsTo(Card::class);
    }
}
