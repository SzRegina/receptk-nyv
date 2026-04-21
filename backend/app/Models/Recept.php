<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recept extends Model
{
    use HasFactory;

    protected $table = 'receptek';

    protected $fillable = [
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras',
        'datum'
    ];

    public function kategoria()
    {
        return $this->belongsTo(Kategoria::class, 'kat_id');
    }
}