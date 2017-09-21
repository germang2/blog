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
    	dd($article);
    }
}
