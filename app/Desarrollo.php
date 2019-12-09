<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desarrollo extends Model
{
    protected $fillable = ['requerimiento'];

    public function empresa()
    {
    	return $this->belongsTo(Empresa::class);
    }

    public function users()
    {
    	return $this->belongsToMany(User::class, 'assigned_desarrollos')->withTimestamps();
    }
}
