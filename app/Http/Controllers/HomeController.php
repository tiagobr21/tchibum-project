<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depoimentos;
use App\Models\Home;
use App\Models\Galeria;


class HomeController extends Controller
{


    public function index(){
        $depoimentos = Depoimentos::all();

        $home = Home::find(1);

        $imagens = Galeria::all();

        // dd(auth()->user());
        return view('home',compact('depoimentos','home','imagens'));
    }


}
