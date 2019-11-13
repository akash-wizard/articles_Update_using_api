<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function readArticles() {
    	$data = file_get_contents('https://newsapi.org/v2/everything?q=bitcoin&from=2019-10-13&sortBy=publishedAt&apiKey=2145afc9ac7341dfa5483363e4ae5ff3');
    	// dd($data);
    	$articles = json_decode($data);

    	$articles = $articles->articles;
    	// dd($articles);
    	return view('welcome', compact('articles'));
}
}