<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'role_id', 'icon', 'phone_number', 'token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function accountDetail(){
        return $this->hasOne(AccountDetail::class);
    }
    public function cardSellings(){
        return $this->hasMany(CardSelling::class);
    }
    public function coinBuyings(){
        return  $this->hasMany(CoinBuying::class);
    }
    public function reviews(){
        return  $this->hasMany(Review::class);
    }
     public function coinSellings(){
        return  $this->hasMany(CoinSelling::class);
    }

    public static function registerUser($request){
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'password' => bcrypt($request->password),
            'role_id' => 1,
            'token' => Str::random(15),
        ]);
    }

    public static function processImage($image){
        $image_name = Str::random(10).'.'.$image->getClientOriginalExtension();
        $is_file_uploaded = Storage::disk('uploads')->putFileAs('/',$image, $image_name);
        return $image_name;
    }
}
