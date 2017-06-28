<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class UserController extends Controller
{
    
	public function index()
    {
        $authors = \App\Author::all();
        
        return view ('user/index')->with('authors', $authors);
        
    }

    public function create()
    {
        //
         return view ('user/create');
    }

    public function show ($id) {
    	$author = \App\Author::find($id);
    	$posts = \App\Post::where('author_id',$id)->get();

        //return view ('entry/index')->with('posts', $posts);
		return view('user/show', ['author' => $author, 'posts' => $posts]);		
 	}

	public function edit($id)
    {
        $author = \App\Author::find($id);
        return view('user/edit')->with('author',$author);
    }

 	public function store(Request $request)
    {
        $author = new Author;

        $author->name = $request->name;
        $author->username = $request->username;
        $author->email = $request->email;
        $author->about = $request->about;
        $author->modified_at = date("Y-m-d");
        
        $author->save();
        return redirect()->action('UserController@index');
    }

    public function update(Request $request, $id)
    {
        $author = \App\Author::find($id);

        $author->name = $request->name;
        $author->username = $request->username;
        $author->email = $request->email;
        $author->about = $request->about;
        
        $author->save();
        return redirect()->action('UserController@index');
    }

}
