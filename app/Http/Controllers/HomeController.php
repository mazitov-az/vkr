<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Connector;
use App\Models\Wire;
use App\Models\Shieldinge;
use App\Models\Tube;
use App\Models\Cable;
use App\Models\User;

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
    public function start()
    {
        $context = ['cons' => Connector::find(1)->get(), 
                    'wires' => Wire::find(1)->get(),
                    'shields' => Shieldinge::find(1)->get(),
                    'tubes' => Tube::find(1)->get()
        ];

        return view('start', $context);
    } 

    public function index()
    {
        return view('home');
    }

    public function storeCable(Request $request)
    {
        $con = Connector::find(1);
        $wire = Wire::find(1);
        $shield = Shieldinge::find(1);
        $tube = Tube::find(1);

        $weight = $con['weight'] + $wire['weight'] + $shield['weight'] + $tube['weight'];

        Auth::user()->cables()->create(['name' => $request->nameCable,
                                        'connector_id' => $request->$con['id'],
                                        'wire_id' => $request->$wire['id'],
                                        'shieldinge_id' => $request->$shield['id'],
                                        'tube_id' => $request->$tube['id'],
                                        'weight' => $weight
                                        ]);

        
        dd( request()->all() );
    }

}
