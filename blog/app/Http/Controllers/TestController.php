<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{
    public function view($id){
    	// This is a query, that finds an article with the id of the parameter
    	$article = Article::find($id);
    	// Now, for get the relations is just needed call the functions declared in the model
    	$article->category;
    	$article->user;
    	$article->tags;
    	
    	// The controller return a view with two parameters.
    	// The first is the name of the view, with the path if is needed
    	// The second is a list with the values that will be sent to the view
    	return view('test/index', ['article' => $article]);
    }
}
