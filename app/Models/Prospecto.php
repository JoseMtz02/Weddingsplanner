<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prospecto extends Model
{
    protected $fillable = ['estatus', 'notas', 'contacto_id'];

    public function contacto()
    {
        return $this->belongsTo(Contacto::class);
    }
}

