<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Connector;
use App\Models\Wire;
use App\Models\Shieldinge;
use App\Models\Tube;

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
        $context = ['cons' => Connector::latest()->get(), 
                    'wires' => Wire::latest()->get(),
                    'shields' => Shieldinge::latest()->get(),
                    'tubes' => Tube::latest()->get()
        ];

        return view('start', $context);
    } 

    public function index()
    {
        return view('home');
    }

    public function storeCable(Request $request)
    {
        // Auth::user()->cables()->create(['name' => $request->input('nameCable'),
        //                                 'component' => $request->])
        $cable = new Cable();
        $cable->name = $request->input('nameCable');
        $cable->component = [$request->option($con->title) . " x " . $request->input('numConnect1'),
                            $request->option($wire->title) . " x " . $request->input('numWire1'),
                            $request->option($shield->title) . " x " . $request->input('numShield1'),
                            $request->option($tube->title) . " x " . $request->input('numTube1')
                            ];
        
    }

}
