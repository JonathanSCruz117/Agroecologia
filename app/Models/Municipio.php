<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'departamento_id','codigo');
    }

    public function colegios()
    {
        return $this->hasMany(Colegio::class, 'municipio_id', 'codigo');
    }
    

    protected $fillable =
    [
        'nombre',
        'codigo',
        'departamento_id',
    ];

}
