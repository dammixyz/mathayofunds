<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
    protected $fillable = [
        'card_selling_id', 'image', 'image_type'
    ];
    public function cardSelling(){
        return  $this->belongsTo(CardSelling::class);
    }
}
