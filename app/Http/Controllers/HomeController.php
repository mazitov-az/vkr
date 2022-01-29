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
                $context = ['cons' => Auth::user()->connectors()->get(), 
                    'wires' => Auth::user()->wires()->get(),
                    'shields' => Auth::user()->shieldinges()->get(),
                    'tubes' => Auth::user()->tubes()->get()
        ];
        return view('start', $context);
    } 
    public function index()
    {
        return view('home');
    }
}
