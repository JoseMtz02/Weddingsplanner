<?php

// Modelo de Contacto
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'correo_electronico', 'telefono', 'empresa'];

   public function prospecto()
    {
        return $this->hasOne(Prospecto::class);
    }
}
