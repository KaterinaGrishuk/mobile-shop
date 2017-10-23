<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'amount', 'image', 'description', 'user_id', 'status'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

}
