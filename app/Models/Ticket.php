<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['quantity', 'price', 'type'];

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function cart()
    {
        return $this->belongsToMany('App\Models\Cart');
    }
}
