<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'cpf'];

    public function cart()
    {
        return $this->hasOne('App\Models\Cart');
    }
}
