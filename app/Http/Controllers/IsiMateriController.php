<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IsiMateri;
use App\SubMateri;
use Illuminate\Support\Facades\Auth; 

class IsiMateriController extends Controller
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
       $isimateri = IsiMateri::all();
    return view('isimateri.index', compact('isimateri'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $submateri = SubMateri::all();
    return view('isimateri.create', compact('submateri'));
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
        'header1'=>'required',
        'image1'=>'required',
        'paragraf1'=>'required',
        'header2'=>'required',
        'image2'=>'required',
        'paragraf2'=>'required',
        'header3'=>'required',
        'image3'=>'required',
        'paragraf3'=>'required',
        'header4'=>'required',
        'image4'=>'required',
        'paragraf4'=>'required',
      ]);
      $isimateri = new IsiMateri([
        'id_sub_materi' => $request->get('submateri'),
        'header1' => $request->get('header1'),
        'image1' => $request->get('image1'),
        'paragraf1' => $request->get('paragraf1'),
        'header2' => $request->get('header2'),
        'image2' => $request->get('image2'),
        'paragraf2' => $request->get('paragraf2'),
        'header3' => $request->get('header3'),
        'image3' => $request->get('image3'),
        'paragraf3' => $request->get('paragraf3'),
        'header4' => $request->get('header4'),
        'image4' => $request->get('image4'),
        'paragraf4' => $request->get('paragraf4'),
      ]);
      $isimateri->save();
      return redirect('/isimateri')->with('success', 'IsiMateri has been added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $isimateri = IsiMateri::find($id);
        return view('isimateri.edit', compact('isimateri'));
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
        'header1'=>'required',
        'image1'=>'required',
        'paragraf1'=>'required',
        'header2'=>'required',
        'image2'=>'required',
        'paragraf2'=>'required',
        'header3'=>'required',
        'image3'=>'required',
        'paragraf3'=>'required',
        'header4'=>'required',
        'image4'=>'required',
        'paragraf4'=>'required',
      ]);
        $isimateri = IsiMateri::find($id);
        $isimateri->header1 = $request->get('header1');
        $isimateri->image1 = $request->get('image1');
        $isimateri->paragraf1 = $request->get('paragraf1');
        $isimateri->header2 = $request->get('header2');
        $isimateri->image2 = $request->get('image2');
        $isimateri->paragraf2 = $request->get('paragraf2');
        $isimateri->header3 = $request->get('header3');
        $isimateri->image3 = $request->get('image3');
        $isimateri->paragraf3 = $request->get('paragraf3');
        $isimateri->header4 = $request->get('header4');
        $isimateri->image4 = $request->get('image4');
        $isimateri->paragraf4 = $request->get('paragraf4');
      $isimateri->save();
      return redirect('/isimateri')->with('success', 'IsiMateri has been update');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $isimateri = IsiMateri::find($id);
     $isimateri->delete();

     return redirect('/isimateri')->with('success', 'IsiMateri has been deleted Successfully');
    }
}
