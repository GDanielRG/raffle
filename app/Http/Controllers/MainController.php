<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concursant;
use App\Prize;
use App\Raffle;
use Carbon\Carbon;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setLocale('es');
    }

    public function index()
    {
        $concursants = Concursant::where();
    }

    public function raffled(Raffle $raffle)
    {
        $prizes = Prize::where('taken', false)->where('batch', $raffle->batch)->get();
        $concursants = Concursant::where('checked', true)->whereNull('prize_id')->get();

        while($prizes->count() != 0 && $concursants->count() != 0 )
        {
            $concursant = $concursants->random(1)[0];
            $prize = $prizes->random(1)[0];
            $concursant->prize_id = $prize->id;
            $concursant->save();
            $prize->taken = true;
            $prize->save();

            $prizes = Prize::where('taken', false)->where('batch', $raffle->batch)->get();
            $concursants = Concursant::where('checked', true)->whereNull('prize_id')->get();
        }

        $concursants = Concursant::where('checked', true)->whereNotNull('prize_id')->get();
        $raffle->raffled = true;
        $raffle->save();

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
        $raffles = Raffle::all();
        $prizes = Prize::all();        
        return view('prizes', ['prizes' => $prizes, 'raffles' => $raffles,]);
    }
    
    public function raffles()
    {
        $raffles = Raffle::all();
        $prizes = Prize::all();        
        return view('raffles', ['prizes' => $prizes, 'raffles' => $raffles,]);
    }
    
    public function raffle(Raffle $raffle)
    {
        $raffle = raffle;
        $prizes = Prize::all();        
        return view('raffle', ['prizes' => $prizes, 'raffle' => $raffle,]);
    }
    
    public function concursants()
    {
        $concursants = Concursant::where('checked', true)->orderBy('name')->get();  
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
