<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
	public function index()
    {
        $authors = \App\Author::all();
        
        return view ('user/index')->with('authors', $authors);
        
    }

    public function show ($id) {
    	$author = \App\Author::find($id);
    	$posts = \App\Post::where('author_id',$id)->get();

        //return view ('entry/index')->with('posts', $posts);
		return view('user/show', ['author' => $author, 'posts' => $posts]);		
 	}

}
