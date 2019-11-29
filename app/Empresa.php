<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['nombre', 'contacto', 'email', 'ubicacion', 'giro'];

    public function disenos()
    {
    	return $this->hasMany(Diseno::class);
    }

    public function desarrollos()
    {
    	return $this->hasMany(Desarrollo::class);
    }
}
