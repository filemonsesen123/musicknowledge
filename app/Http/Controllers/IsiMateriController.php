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
        'paragraf1'=>'required',
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
        'header5' => $request->get('header5'),
        'image5' => $request->get('image5'),
        'paragraf5' => $request->get('paragraf5'),
        'header6' => $request->get('header6'),
        'image6' => $request->get('image6'),
        'paragraf6' => $request->get('paragraf6'),
        'header7' => $request->get('header7'),
        'image7' => $request->get('image7'),
        'paragraf7' => $request->get('paragraf7'),
        'header8' => $request->get('header8'),
        'image8' => $request->get('image8'),
        'paragraf8' => $request->get('paragraf8'),
        'header9' => $request->get('header9'),
        'image9' => $request->get('image9'),
        'paragraf9' => $request->get('paragraf9'),
        'header10' => $request->get('header10'),
        'image10' => $request->get('image10'),
        'paragraf10' => $request->get('paragraf10'),
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
        $isimateri->header5 = $request->get('header5');
        $isimateri->image5 = $request->get('image5');
        $isimateri->paragraf5 = $request->get('paragraf5');
        $isimateri->header6 = $request->get('header6');
        $isimateri->image6 = $request->get('image6');
        $isimateri->paragraf6 = $request->get('paragraf6');
        $isimateri->header7 = $request->get('header7');
        $isimateri->image7 = $request->get('image7');
        $isimateri->paragraf7 = $request->get('paragraf7');
        $isimateri->header8 = $request->get('header8');
        $isimateri->image8 = $request->get('image8');
        $isimateri->paragraf8 = $request->get('paragraf8');
        $isimateri->header9 = $request->get('header9');
        $isimateri->image9 = $request->get('image9');
        $isimateri->paragraf9 = $request->get('paragraf9');
        $isimateri->header10 = $request->get('header10');
        $isimateri->image10 = $request->get('image10');
        $isimateri->paragraf10 = $request->get('paragraf10');
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
