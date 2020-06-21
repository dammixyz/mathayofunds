<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
      'user_id', 'sender', 'title', 'body'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
