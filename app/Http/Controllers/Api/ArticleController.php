<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->filled('search')){

            $article = Article::search($request->search)->get();

        }else{

            $article = Article::get();

        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get all article",
            'data' => $article
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article $article)
    {
        // $article = Article::find($id);

        if ($file = $request->file('image')) {

            $upload = $request->file('image');
            $this->validate($request, [
                'image'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/article';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $article = Article::create([
                'id' => $request->id,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'image' => $image,
                'desc' => $request->desc,
                'content' => $request->content,
                'writer' => $request->writer,
                'source' => $request->source,
                'status' => 'Inactive',
            ]);

            if (!$article) {
                // return $this->sendError("", "failed create article");
            }
            
        } else {
            $article = Article::create([
                'id' => $request->id,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'image' => $image,
                'desc' => $request->desc,
                'content' => $request->content,
                'writer' => $request->writer,
                'source' => $request->source,
                'status' => 'Inactive',
            ]);

            if (!$article) {
                return response()->json([
                    'code' => 422,
                    'status' => false,
                    'message' => "Failed get the article",
                    'data' => ""
                ]);
            }
        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get the article",
            'data' => $article
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article = Article::find($article->id);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get the article",
            'data' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        // $article = Article::find($article->id);
        
        if ($file = $request->file('image')) {

            if(File::exists(public_path('article/'.$article->image))){

                File::delete(public_path('article/'.$article->image));
    
            }

            $upload = $request->file('image');
            $this->validate($request, [
                'image'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/article';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $article->update([
                'id' => $request->id,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'image' => $image,
                'desc' => $request->desc,
                'content' => $request->content,
                'writer' => $request->writer,
                'source' => $request->source,
                'status' => $request->status,
            ]);

            if (!$article) {
                // return $this->sendError("", "failed create article");

                return response()->json([
                    'code' => 422,
                    'status' => False,
                    'message' => "Failed update the article",
                    'data' => ""
                ]);
            }
            
        } else {
            
            $article->update([
                'id' => $request->id,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'image' => $image,
                'desc' => $request->desc,
                'content' => $request->content,
                'writer' => $request->writer,
                'source' => $request->source,
                'status' => $request->status,
            ]);

            if (!$article) {
                
                // return $this->sendError("", "failed update article");

                return response()->json([
                    'code' => 422,
                    'status' => False,
                    'message' => "Failed update the article",
                    'data' => ""
                ]);
            }
        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success update the article",
            'data' => $article
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article = Article::find($article->id);
        
        if(File::exists(public_path('article/'.$article->image))){

            File::delete(public_path('article/'.$article->image));
            
            $article->delete();

        } else{

            $article->delete();

        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete the article",
            'data' => ""
        ]);
    }
}
