<?php

namespace App\Http\Controllers\Viewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Product;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;
use App\Models\Category;

class HomeController extends Controller
{
    
    public function index(Article $article)
    {
        $data = [

            'article' => Article::find($article->id),
            'product' => Product::with('company','subcategory','IndonesiaCity','IndonesiaProvince')->get(),
            'category' => Category::all(),

        ];

        return view ('/home/home', compact('data'));
    }

}
