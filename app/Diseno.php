<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diseno extends Model
{
	protected $fillable = ['requerimiento'];

    public function empresa()
    {
    	return $this->belongsTo(Empresa::class);
    }
}
