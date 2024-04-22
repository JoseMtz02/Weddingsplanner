<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    use HasFactory;
    public function prospecto()
    {
        return $this->belongsTo(Prospecto::class);
    }
}
