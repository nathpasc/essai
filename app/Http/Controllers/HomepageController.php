<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
       $articles = Article::paginate(10);
        return view('homepage.index',['articles' => $articles]);
   }
   public function show(int $id)
{
    $article =Article::findOrFail($id);
    return view('homepage.show',[ 'article' => $article,]);
}
}


