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

    		$location = json_decode($visitor->location);

    		foreach ($location as $k => $v) {
    			if (!empty($v)){
    				echo $k . ' : ' . $v . '<br />'; 
    			}
    		}

    		echo 'Times visited : ' . $visitor->times_visited . '<br/ >' . 'Device : ' . $visitor->device;
    	}

    }


}
