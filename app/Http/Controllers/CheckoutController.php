<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function order()
    {
        return view('checkout.order');
    }
    public function create()
    {
        return redirect('/checkout');
    }
}
