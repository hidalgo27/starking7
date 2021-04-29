<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    use HasFactory;
    protected $table = "portafolio";

    public function portafolio_imagen()
    {
        return $this->hasMany(PortafolioImagen::class, 'idPortafolio');
    }

}
