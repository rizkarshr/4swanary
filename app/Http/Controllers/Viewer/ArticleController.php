<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show(Article $article)
    {
        $article = Article::find($article->id);

        return view ('/home/article', compact('article'));
    }
    
}
