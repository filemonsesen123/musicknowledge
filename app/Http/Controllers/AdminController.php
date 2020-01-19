<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Materi;
use App\IsiMateri;
use App\SubMateri;
use App\Http\Controllers\Controller; 
use Validator;

class AdminController extends Controller
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
       $admin = Admin::all();
       $materi = Materi::all();
       $submateri = SubMateri::all();
       $isimateri = IsiMateri::all();
    return view('admin.index', compact('admin','materi','submateri','isimateri'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
      ]);
      $admin = new Admin([
        'name' => $request->get('name'),
        'email'=> $request->get('email'),
        'password' => $request->get('password'),
      ]);
      $admin->save();
      return redirect('/admin')->with('success', 'Admin has been added');
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
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin'));
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
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
      ]);
        $admin = Admin::find($id);
        $admin->name = $request->get('name');
        $admin->email = $request->get('email');
        $admin->password = $request->get('password');
      $admin->save();
      return redirect('/admin')->with('success', 'Admin has been update');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $admin = Admin::find($id);
     $admin->delete();

     return redirect('/admin')->with('success', 'Admin has been deleted Successfully');
    }
}
