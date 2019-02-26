<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['name', 'people_quantity', 'started', 'finished'];

    protected $table = 'session';

    public function events()
    {
        return $this->belongsToMany('App\Models\Event', 'session_has_events', 'session_id', 'events_id');
    }
}
