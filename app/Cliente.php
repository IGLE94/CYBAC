<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function orders()
    {
    	return $this->hasMany(Order::class);
    }
}
