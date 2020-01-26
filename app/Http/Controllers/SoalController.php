<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soal;
use App\SubMateri;
use App\Http\Controllers\Controller; 
use Validator;

class SoalController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $soal = Soal::all();
    return view('soal.index', compact('soal'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $submateri = SubMateri::all();
    return view('soal.create', compact('submateri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
        'soal'=>'required',
        'jawaban'=>'required',
        'id_sub_materi'=>'required',
        'a'=>'required',
        'b'=>'required',
        'c'=>'required',
        'd'=>'required',
      ]);
      $soal = new Soal([
        'soal' => $request->get('soal'),
        'jawaban'=> $request->get('jawaban'),
        'id_sub_materi' => $request->get('id_sub_materi'),
        'a' => $request->get('a'),
        'b'=> $request->get('b'),
        'c' => $request->get('c'),
        'd' => $request->get('d'),
      ]);
      $soal->save();
      return redirect('/soal')->with('success', 'Soal has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soal = Soal::find($id);
       $submateri = SubMateri::all();
        return view('soal.edit', compact('soal','submateri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $request->validate([
        'soal'=>'required',
        'jawaban'=>'required',
        'a'=>'required',
        'b'=>'required',
        'c'=>'required',
        'd'=>'required'
      ]);
        $soal = Soal::find($id);
        $soal->soal = $request->get('soal');
        $soal->id_sub_materi = $request->get('id_sub_materi');
        $soal->jawaban = $request->get('jawaban');
        $soal->a = $request->get('a');
        $soal->b = $request->get('b');
        $soal->c = $request->get('c');
        $soal->d = $request->get('d');
      $soal->save();
      return redirect('/soal')->with('success', 'Soal has been update');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $soal = Soal::find($id);
     $soal->delete();

     return redirect('/soal')->with('success', 'Soal has been deleted Successfully');
    }
}
