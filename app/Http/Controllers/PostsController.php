<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //
    public function index(){

        return view('blog.index')
        ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    public function create(){
        return view('blog.create');
    }
}
