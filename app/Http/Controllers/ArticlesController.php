<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
class ArticlesController extends Controller
{
   public function index()
    {
      $articles = Article::get();
      return view('articles.index',compact('articles'));
    }
    public function create()
    {
      return view('articles.create');
    }
    public function store()
    {
      $input = (Request::all());
      Article::create($input);
      return redirect('articles');
    }
    public function show($id)
    {
      $article =Article::find($id);
      if (empty($article))
        abort(404);
      return view('articles.show',compact('article'));
    }
}
