<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ticket;
use Order;

class OrderController extends Controller
{
     public function create()
    {
        return redirect('/order');
    }
    public function index() 
    {
        return view('order.index');
    }
    // public function create()
    // {
        
    // }
    public function details(Request $request)
    {
        return 'hi';
    }
    
}
