<?php

namespace App\Http\Controllers\usd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class waterController extends Controller
{
    public function argos(){
        return view('Water.master.argos.index');
    }
    public function aspirator(){
        return view('Water.master.aspirator.index');
    }
    public function bio(){
        return view('Water.master.bio.index');
    }
    public function mixer(){
        return view('Water.master.mixer.index');
    }
    public function triton(){
        return view('Water.master.triton.index');
    }
    public function halo(){
        return view('Water.master.surface.index');
    }
    public function micro(){
        return view('Water.master.micro.index');
    }
    public function trioval(){
        return view('Water.master.trioval.index');
    }
}
