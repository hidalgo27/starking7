<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table='ubdepartamento';

    public function provincia()
    {
        return $this->hasMany(Provincia::class, 'idDepa');
    }
}
