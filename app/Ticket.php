<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function holder()
    {
        return $this->belongTo('App/Holder');
    }
    public function order()
    {
    	return $this->belongTo('App/Order');
    }
}
