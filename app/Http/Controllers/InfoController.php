<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visitors;

class InfoController extends Controller
{
    public function index() 
    {
    	$visitors = Visitors::all();

    	foreach($visitors as $visitor){
            $visitor->location = json_decode($visitor->location);
    	}
    	
        return view('infopanel')->with('visitors', $visitors);
    }
}
