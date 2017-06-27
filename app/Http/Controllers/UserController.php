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
		return view('user/show', ['id' => $id]);		
 	}

}
