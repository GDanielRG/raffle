<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concursant;
use App\Prize;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['concursants'] = Concursant::where('checked', true)->get();
        $data['prizes'] = Prize::all();
        
        return view('home',$data);
    }
}
