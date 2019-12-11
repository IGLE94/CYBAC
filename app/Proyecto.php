<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['tipo'];

    public function empresa()
    {
    	return $this->belongsTo(Empresa::class);
    }

    public function types()
    {
    	return $this->belongsTo(Tipo::class);
    }
}
