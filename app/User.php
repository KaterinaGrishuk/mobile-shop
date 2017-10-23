<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'email', 'password', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function product(){
        return $this->hasMany('App\Product');
    }
    public function transaction_s(){
        return $this->hasMany('App\Transaction', 'seller_id');
    }
    public function transaction_b(){
        return $this->hasMany('App\Transaction', 'buyer_id');
    }
}
