<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['image_box', 'image_layer', 'image_layer_mobile'];

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
