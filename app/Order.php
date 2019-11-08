<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['descripcion', 'costoServicio'];

    public function getRouteKeyName()
    {
        return 'descripcion';
    }

    public function cliente()
    {
    	return $this->belongsTo(Cliente::class);
    }

    public function servicio()
    {
    	return $this->belongsTo(Servicio::class);
    }

    public function equipo(){
    	return $this->belongsTo(Equipo::class);
    }
}
