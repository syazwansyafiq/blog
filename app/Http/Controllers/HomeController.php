<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Ticket;

class HomeController extends Controller
{
    public function index(){

    	$tickets = Ticket::get();
    	
        return view('homepage.index', ['tickets' => $tickets]);
    }
}
