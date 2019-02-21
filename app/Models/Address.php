<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street', 'number', 'district', 'complement', 'localization', 'latitude', 'longitude'];
    
    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
