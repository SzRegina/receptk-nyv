<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategoria extends Model
{
    use HasFactory;

    protected $table = 'kategoriak';

    protected $fillable = ['nev'];

    public function receptek()
    {
        return $this->hasMany(Recept::class, 'kat_id');
    }
}