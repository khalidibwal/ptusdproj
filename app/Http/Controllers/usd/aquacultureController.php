<?php

namespace App\Http\Controllers\usd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aquacultureController extends Controller
{
    public function aire2index(){
        return view('Aguaculture.master.aire2.index');
    }
    public function autopumpindex(){
        return view('Aguaculture.master.autopump.index');
    }
    public function diatomindex(){
        return view('Aguaculture.master.d3.index');
    }
    public function diffuserindex(){
        return view('Aguaculture.master.diffuser.index');
    }
    public function shrimpindex(){
        return view('Aguaculture.master.shrimp.index');
    }
    public function submersibleindex(){
        return view('Aguaculture.master.submersible.index');
    }
}
