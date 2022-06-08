<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $profil = User::where('id', Auth::user()->id)->first();

        if($request->filled('search')){

            $category = Category::search($request->search)->get();

        }else{

            $category = Category::all();

        }

        return view('category', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $profil = User::where('id', Auth::user()->id)->first();
        $code = $this->generateUniqueCode();

        $category = Category::create([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return redirect('/admin/manage-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     // $profil = User::where('id', Auth::user()->id)->first();

    //     //$category = Category::with('item')->find($category->id);
    //     $category = Category::find($category->id); 

    //     return view('category', compact('category'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $profil = User::where('id', Auth::user()->id)->first();
        $category = Category::find($id);

        return view('editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // $profil = User::where('id', Auth::user()->id)->first();
        $category = Category::find($id);
        $code = $this->generateUniqueCode();

        $category->update([
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return redirect('/admin/manage-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $profil = User::where('id', Auth::user()->id)->first();
        $category = Category::findOrFail($id);
        
        $category->delete();

        return redirect('/admin/manage-category');
    }

    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Product::where("product_pict", "=", $code)->first());
  
        return $code;
    }
}