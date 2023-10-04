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
}
