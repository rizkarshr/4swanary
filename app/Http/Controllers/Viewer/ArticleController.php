<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::where('status','=','Active')->get();

        if (($article->status == 'Active') >= 2){

            $article = Article::where('status','=','Active')->latest('id')->first();

        }

        return view ('home.article', compact('article'));
    }
    
}
