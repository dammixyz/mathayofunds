<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsLetter extends Model
{
    protected $fillable = [
        'email', 'token'
    ];

    public static function createSubscription($email){
        $subscription = NewsLetter::create([
            'email' => $email,
            'token' => Str::random(15)
        ]);
        if ($subscription){
            return true;
        }
        else{
            return false;
        }
    }
}
