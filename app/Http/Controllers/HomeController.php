<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depoimentos;
use App\Models\Home;
use App\Models\Galeria;
use App\Models\Posts;
use App\Models\Comunidade;

class HomeController extends Controller
{


    public function index(){

        $home = Home::find(1);
        $depoimentos = Depoimentos::all();
        $imagens = Galeria::all();
        $posts = Posts::latest()->paginate(6);
        $comunidades = Comunidade::latest()->paginate(6);

        // dd(auth()->user());
        return view('home',compact('depoimentos','home','imagens','posts','comunidades'));
    }


}
