<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\SubMateri;
use\App\Materi;
use Illuminate\Support\Facades\Auth; 

class SubMateriController extends Controller
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
       $submateri = SubMateri::all();
    return view('submateri.index', compact('submateri'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $materi = Materi::all();
    return view('submateri.create', compact('materi'));
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
        'submateri'=>'required',
        'materi'=>'required',
        'gambar'=>'required'
      ]);
      $submateri = new SubMateri([
        'judul_sub_materi' => $request->get('submateri'),
        'id_materi' => $request->get('materi'),
        'gambar_sub_materi' => $request->get('gambar'),
      ]);
      $submateri->save();
      return redirect('/submateri')->with('success', 'SubMateri has been added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $submateri = SubMateri::find($id);
        return view('submateri.edit', compact('submateri'));
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
        'submateri'=>'required',
      ]);
        $submateri = SubMateri::find($id);
        $submateri->judul_sub_materi = $request->get('submateri');
        $submateri->gambar_sub_materi = $request->get('gambar');
      $submateri->save();
      return redirect('/submateri')->with('success', 'SubMateri has been update');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $submateri = SubMateri::find($id);
     $submateri->delete();

     return redirect('/submateri')->with('success', 'SubMateri has been deleted Successfully');
    }
}
