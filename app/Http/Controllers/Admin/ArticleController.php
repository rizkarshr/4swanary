<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

            $article = Article::all();

        }

        return view('article', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud/createarticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $article = Article::findOrFail($id);
        $code = $this->generateUniqueCode();

        if ($file = $request->file('image')) {

            $upload = $request->file('image');
            $this->validate($request, [
                'image'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/article';
            $upload->move($penyimpanan, $code.'.'.$upload->getClientOriginalExtension());
            $image = $code.'.'.$upload->getClientOriginalExtension();

            $content = $request->content;
            $dom = new \DomDocument();
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');

            foreach($images as $k => $img){
                
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $article_content= "/upload/" . time().$k.'.png';
                $path = public_path() . $article_content;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $article_content);
        
            }
    
            $content = $dom->saveHTML();
 

            $article = Article::create([
                'id' => $request->id,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'image' => $image,
                'content' => $content,
                'writer' => $request->writer,
                'source' => $request->source,
                'status' => 'Inactive',
            ]);

            if (!$article) {
                // return $this->sendError("", "failed create the article");
            }
            
        } else {

            $content = $request->content;
            $dom = new \DomDocument();
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');

            foreach($images as $k => $img){
                
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $article_content= "/upload/" . time().$k.'.png';
                $path = public_path() . $article_content;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $article_content);
        
            }
    
            $content = $dom->saveHTML();

            $article = Article::create([
                'id' => $request->id,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'image' => $image,
                'content' => $content,
                'writer' => $request->writer,
                'source' => $request->source,
                'status' => 'Inactive',
            ]);

            if (!$article) {
               
                //

            }
        }

        return redirect('/admin/manage-article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $article = Article::find($id);

    //     return view('article', compact('article'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('crud/editarticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $code = $this->generateUniqueCode();

        
        if ($file = $request->file('image')) {

            if(File::exists(public_path('article/'.$article->image))){

                File::delete(public_path('article/'.$article->image));
    
            }

            $upload = $request->file('image');
            $this->validate($request, [
                'image'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/article';
            $upload->move($penyimpanan, $code.'.'.$upload->getClientOriginalExtension());
            $image = $code.'.'.$upload->getClientOriginalExtension();

            $article->update([
                'id' => $request->id,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'image' => $image,
                'content' => $request->content,
                'writer' => $request->writer,
                'source' => $request->source,
                'status' => $request->status,
            ]);

            if (!$article) {
                
                //

            }
            
        } else {
            
            $article->update([
                'id' => $request->id,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'content' => $request->content,
                'writer' => $request->writer,
                'source' => $request->source,
                'status' => $request->status,
            ]);

            if (!$article) {
                
                //

            }
        }

        return redirect('/admin/manage-article');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        
        if(File::exists(public_path('article/'.$article->image))){

            File::delete(public_path('article/'.$article->image));
            
            $article->delete();

        } else{

            $article->delete();

        }

        return redirect('/admin/manage-article');
    }

    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Product::where("product_pict", "=", $code)->first());
  
        return $code;
    }
}
