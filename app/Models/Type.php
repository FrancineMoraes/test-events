<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['types'];

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket');
    }
}
