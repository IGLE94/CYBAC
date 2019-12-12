<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['requerimiento'];

    public function empresa()
    {
    	return $this->belongsTo(Empresa::class);
    }

    public function tipo()
    {
    	return $this->belongsTo(Tipo::class);
    }
}
