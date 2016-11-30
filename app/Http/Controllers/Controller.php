<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Stevebauman\Location\Location;
use Jenssegers\Agent\Agent;

use App\Visitors;
use App\Users;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIp()
    {
    	$ip = request()->ip();
    	if ($ip === "::1") {
    		$ip = "85.144.90.129";
    	}
    	return $ip;
        // return request()->ip() != '::1' ? request()->ip() : '85.144.90.129';
    }

    public function generateRandomString($length = 10) 
    {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
    return $randomString;
    }

   public function getVisitor($token = null)
    {
        if ($token == null) {
            return Visitors::where('ip', $this->getIp())->first();
        } else {
            $visitor = Visitors::where('remember_token', $token)->first();
            if (count($visitor) > 0) return $visitor;
            else return $this->getVisitor();
        }
    }

    public function getAgent()
    {
        $agent = new Agent();

        if ($agent->isDesktop()) {
            if ($agent->is('OS X')) $device = 'Mac';
            else $device = 'PC';
        } else {
            if ($agent->isRobot()) $device = $agent->robot();
            elseif ($agent->isPhone()) {
                if ($agent->is('iPhone')) $device = 'iPhone';
                else $device = 'Phone';
            } else $device = $agent->device();
        }
    
        return $device . ' ' . $agent->platform() . ' ' . $agent->version($agent->platform())
        . ' ' . $agent->browser() . ' ' . $agent->version($agent->browser());
    }

 	public function visitor()
    {
        $ip = $this->getIp();

        $location = new Location();
        $position = $location->get($ip);
        unset($position->driver);

        $visitor = $this->getVisitor(Input::get('remember_token'));
        if (count($visitor) > 0){
            $visitor->increment('times_visited');
        } else {
            $visitor = new Visitors();
            $visitor->remember_token = $this->generateRandomString();
            $visitor->times_visited = 1;
        }
        $visitor->ip = $ip;
        $visitor->location = json_encode($position);
        $visitor->device = $this->getAgent();
        $visitor->save();
        return $visitor->remember_token;
    }
}
