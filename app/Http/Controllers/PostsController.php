<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{

    public function index(){
       
        $posts = Posts::latest()->paginate(2);


        return view('posts',compact('posts'));

    }


    public function post(Posts $post){
    

        return view('post',compact('post'));
    }

}
