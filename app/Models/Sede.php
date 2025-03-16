<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    public function colegio()
    {
        return $this->belongsTo(Colegio::class,'colegio_id','codigo');
    }
    protected $fillable =
    [
        'nombre',
        'codigo',
        'colegio_id',
    ];
}

