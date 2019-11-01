<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $fillable = ['nombre', 'paterno', 'materno', 'email', 'telefono'];

    public function orders()
    {
    	return $this->hasMany(Order::class);
    }
}
