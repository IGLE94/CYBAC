<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['descripcion', 'costoServicio'];

    public function cliente()
    {
    	return $this->belongsTo(Cliente::class);
    }
}
