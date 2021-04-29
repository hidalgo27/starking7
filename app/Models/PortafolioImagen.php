<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortafolioImagen extends Model
{
    use HasFactory;
    protected $table = "portafolio_imagen";

    public function portafolio()
    {
        return $this->belongsTo(Portafolio::class, 'idPortafolio');
    }

}
