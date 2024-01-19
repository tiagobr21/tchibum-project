<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depoimentos;

class TestimonyController extends Controller
{
    public function index(){
        $depoimentos = Depoimentos::latest()->paginate(3);
    
        return view('testimony',compact('depoimentos'));
    }
}
