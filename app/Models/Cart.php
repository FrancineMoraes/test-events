<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['total', 'user_id'];

    protected $table = 'cart';
    
    public function tickets()
    {
        return $this->belongsToMany('App\Models\Ticket', 'tickets_has_cart', 'cart_id', 'tickets_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
