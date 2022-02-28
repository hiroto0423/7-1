<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
       
       public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    } 
        
       public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    public function create()
    {
    return view('posts/create');
    }   
}

