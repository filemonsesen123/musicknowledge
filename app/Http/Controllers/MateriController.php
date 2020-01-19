<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use Illuminate\Support\Facades\Auth; 

class MateriController extends Controller
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
       $materi = Materi::all();
    return view('materi.index', compact('materi'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi.create');
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
        'judul'=>'required'
      ]);
      $materi = new Materi([
        'judul_materi' => $request->get('judul'),
      ]);
      $materi->save();
      return redirect('/materi')->with('success', 'Materi has been added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materi = Materi::find($id);
        return view('materi.edit', compact('materi'));
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
        'judul'=>'required',
      ]);
        $materi = Materi::find($id);
        $materi->judul_materi = $request->get('judul');
      $materi->save();
      return redirect('/materi')->with('success', 'Materi has been update');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $materi = Materi::find($id);
     $materi->delete();

     return redirect('/materi')->with('success', 'Materi has been deleted Successfully');
    }
}
