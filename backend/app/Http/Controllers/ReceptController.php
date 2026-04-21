<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index()
    {
        $receptek = Recept::with('kategoria')->get();

        return response()->json($receptek);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nev' => 'required|string|max:255',
            'kat_id' => 'required|exists:kategoriak,id',
            'kep_eleresi_ut' => 'required|string',
            'leiras' => 'required|string',
            'datum' => 'nullable|date',
        ]);

        if (!isset($validated['datum'])) {
            $validated['datum'] = now()->toDateString();
        }

        $recept = Recept::create($validated);

        return response()->json($recept, 201);
    }

    public function destroy($id)
    {
        $recept = Recept::findOrFail($id);
        $recept->delete();

        return response()->json([
            'message' => 'A recept törölve lett.'
        ]);
    }

    public function kategoriankent($kat_id)
    {
        $receptek = Recept::with('kategoria')
            ->where('kat_id', $kat_id)
            ->get();

        return response()->json($receptek);
    }
}