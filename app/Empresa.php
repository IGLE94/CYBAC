<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['nombre', 'contacto', 'email', 'ubicacion', 'giro'];

    public function proyectos()
    {
    	return $this->hasMany(Proyecto::class);
    }
}
