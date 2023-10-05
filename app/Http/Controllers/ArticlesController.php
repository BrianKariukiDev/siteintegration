<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article= Article::find($id) or die(abort(404));
        
        return view('show',[
            'article' =>$article
        ]);
    }

    public function index()
    {
        return view('articles',[
            'articles'=>Article::latest()->get()
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $article=new Article;
        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');
        $article->save();
        
        return redirect('/articles'); //Not working
        
    }
}
