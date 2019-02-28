<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'cpf'];

    protected $table = 'user';

    public function cart()
    {
        return $this->hasOne('App\Models\Cart');
    }
}
