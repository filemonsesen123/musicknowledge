<?php

namespace App\Http\Controllers;

use App\Materi;
use Illuminate\Http\Request;
use App\IsiMateri;
use App\SubMateri;
use App\Soal;

class ApiController extends Controller
{

	public function materi()
    {
        return Materi::all();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showmateri(Materi $materi)
    {
        return $materi;
    }
	
	public function isimateri(Request $isimateri)
    {
    	$id_sub_materi = $isimateri->id_sub_materi;
        return IsiMateri::where('id_sub_materi',$id_sub_materi) -> get();
    }

    public function showisimateri(IsiMateri $isimateri)
    {
        return $isimateri;
    }

	public function submateri(Request $submateri)
    {
    	$id_materi = $submateri->id_materi;
        return SubMateri::where('id_materi',$id_materi) -> get();
    }

    public function showsubmateri(SubMateri $submateri)
    {
        return $submateri;
    }
    public function soal(Request $soal)
    {
        $id_sub_materi = $soal->id_sub_materi;
        return Soal::where('id_sub_materi',$id_sub_materi) -> inRandomOrder() -> limit(5) -> get();
    }

    public function showsoal(Soal $soal)
    {
        return $soal;
    }
}
