<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;

class KategoriaController extends Controller
{
    public function index()
    {
        return response()->json(Kategoria::all());
    }
}