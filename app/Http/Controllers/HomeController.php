<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depoimentos;


class HomeController extends Controller
{


    public function index(){
        $depoimentos = Depoimentos::all();

        // dd(auth()->user());
        return view('home',compact('depoimentos'));
    }
}
