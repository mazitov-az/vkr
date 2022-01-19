<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Connector;
use App\Models\Wire;
use App\Models\Shieldinge;
use App\Models\Tube;

class StartController extends Controller
{
    public function start() {


    	$context = ['cons' => Connector::latest()->get(), 
    				'wires' => Wire::latest()->get(),
    				'shields' => Shieldinge::latest()->get(),
    				'tubes' => Tube::latest()->get()
    	];

    	return view('start', $context);
    }    	
}
