<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatusController extends Controller
{
    public function index(){
        return view('contatus');
    }
}
