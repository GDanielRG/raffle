<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concursant;
use App\Prize;

class MainController extends Controller
{
    public function index()
    {
        $concursants = Concursant::where();
    }

    public function raffled()
    {
        $prizes = Prize::where('taken', false)->get();
        $concursants = Concursant::where('checked', true)->whereNull('prize_id')->get();

        while($prizes->count() != 0 && $concursants->count() != 0 )
        {
            $concursant = $concursants->random(1)[0];
            $prize = $prizes->random(1)[0];
            $concursant->prize_id = $prize->id;
            $concursant->save();
            $prize->taken = true;
            $prize->save();

            $prizes = Prize::where('taken', false)->get();
            $concursants = Concursant::where('checked', true)->whereNull('prize_id')->get();
        }

        $concursants = Concursant::where('checked', true)->whereNotNull('prize_id')->get();

        return view('raffled', ['concursants' => $concursants]);
        

    }

    public function getAssist()
    {
        return view('assist');
    }
    
    public function postAssist(Request $request)
    {
        $request->validate([
            'number' => 'exists:concursants,number| required',
        ]);

        $concursant = Concursant::where('number', $request->get('number'))->first();
        $concursant->checked = true;;
        $concursant->save();

        return view('checked', ['concursant' => $concursant]);
        
    }
    
    public function prizes()
    {
        $prizes = Prize::all();        
        return view('prizes', ['prizes' => $prizes]);
    }
    
    public function concursants()
    {
        $concursants = Concursant::where('checked', true)->get();  
        return view('concursants', ['concursants' => $concursants]);
    }

    public function getCheck()
    {
        return view('check');   
    }
    
    public function postCheck(Request $request)
    {

        $request->validate([
            'number' => 'exists:concursants,number| required',
        ]);

        $concursant = Concursant::where('number', $request->get('number'))->first();
        
        return view('check', ['concursant' => $concursant]);   
    }
}
