<?php

namespace App\Http\Controllers\usd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pumpController extends Controller
{
    public function api(){
        return view('Pumps.master.api.index');
    }
    public function firepump(){
        return view('Pumps.master.firepump.index');
    }
    public function horizontal(){
        return view('Pumps.master.horizontal.index');
    }
    public function magnetic(){
        return view('Pumps.master.magnetic.index');
    }
}
