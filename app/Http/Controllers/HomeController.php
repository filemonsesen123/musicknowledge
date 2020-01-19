<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Materi;
use App\SubMateri;
use App\IsiMateri;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
   $admin = Admin::all();
   $materi = Materi::all();
   $submateri = SubMateri::all();
   $isimateri = IsiMateri::all();
   return view('admin/index', compact('admin','materi','submateri','isimateri'));
    }
}
