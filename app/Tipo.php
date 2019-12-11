<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = ['tipo'];

    public function proyectos()
    {
    	return $this->hasMany(Proyecto::class);
    }
}
