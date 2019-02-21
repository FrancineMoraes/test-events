<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['name', 'people_quantity', 'started', 'finished'];

    public function events()
    {
        return $this->belongsToMany('App\Models\Event');
    }
}
