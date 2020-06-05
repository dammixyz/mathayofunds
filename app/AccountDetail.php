<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountDetail extends Model
{
    protected $fillable = [
        'bank', 'name', 'account_number', 'user_id', 'token',
    ];

    public function user(){
        return  $this->belongsTo(User::class);
    }
}
