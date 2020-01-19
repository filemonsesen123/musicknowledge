<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Http\Controllers\Controller; 
class NilaiController extends Controller
{
public function index(Request $nilai)
    {
        $id_user = $nilai->id_user;
        $id_soal = $nilai->id_soal;
        return Nilai::where('id_user',$id_user) -> where('id_soal',$id_soal)->get();
    }
    public function show(Nilai $nilai)
    {
        return $nilai;
    }
    public function store(Request $request)
    {
        $nilai = Nilai::create($request->all());

        return response()->json($nilai, 201);
    }

    public function update(Request $request, Nilai $nilai)
    {
        $nilai->update($request->all());

        return response()->json($nilai, 200);
    }

    public function delete(Nilai $nilai)
    {
        $nilai->delete();

        return response()->json(null, 204);
    }
}
