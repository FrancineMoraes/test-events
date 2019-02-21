<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'first_apresentation', 'last_apresentation', 'status'];

    public function image()
    {
        return $this->hasOne('App\Models\Image', 'events_id');
    }

    public function address()
    {
        return $this->hasOne('App\Models\Address', 'events_id');
    }

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket');
    }

    public function sessions()
    {
        return $this->belongsToMany('App\Models\Session');
    }
}
