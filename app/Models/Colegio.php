<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    use HasFactory;

    public function municipio()
    {
        return $this->belongsTo(Municipio::class,'municipio_id','codigo');
    }

    public function sedes()
    {
        return $this->hasMany(Sede::class,'colegio_id','codigo');
    }
    protected $fillable =
    [
        'nombre',
        'codigo',
        'estado',
        'municipio_id',
    ];

}
