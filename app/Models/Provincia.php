<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = "ubprovincia";

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'idDepa');
    }

    public function distrito()
    {
        return $this->hasMany(Distrito::class, 'idProv');
    }

}
