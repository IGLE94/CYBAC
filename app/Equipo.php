<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = ['equipo', 'marca', 'modelo', 'serie'];

    public function orders(){
    	return $this->hasMany(Order::class);
    }
}
