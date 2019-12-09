<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diseno extends Model
{
	protected $fillable = ['titulo'];

    public function empresa()
    {
    	return $this->belongsTo(Empresa::class);
    }

    public function users()
    {
    	return $this->belongsToMany(User::class, 'assigned_disenos')->withTimestamps();
    }

    public function categoria()
    {
    	return $this->belongsTo(Categoria::class);
    }

    public function actividades()
    {
        return $this->hasMany(Actividad::class);
    }
}
