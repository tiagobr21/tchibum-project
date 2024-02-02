<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunidade;

class CommunityController extends Controller
{
    public function index(){

        $comunidades = Comunidade::latest()->paginate(6);

        return view('communities',compact('comunidades'));

    }
}
