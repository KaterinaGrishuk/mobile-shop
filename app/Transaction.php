<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'product_id', 'seller_id', 'buyer_id'
    ];
    public $timestamps = false;
    public function getTimeCreatedAttribute($data){
        return Carbon::parse($data)->format('H:i:s d/m/Y');
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }
    public function user_s(){
        return $this->belongsTo('App\User', 'seller_id');
    }
    public function user_b(){
        return $this->belongsTo('App\User', 'buyer_id');
    }
    public function getCreatedAtAttribute($data){
        return Carbon::parse($data)->format('H:i:s d/m/Y');
    }
}
