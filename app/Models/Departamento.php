<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public function municipios()
    {
        return $this->hasMany(Municipio::class,'departamento_id','codigo');
    }

    protected $fillable = [
        'nombre',
        'codigo',
    ];    
}

