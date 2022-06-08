<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $profil = User::where('id', Auth::user()->id)->first();

        if($request->filled('search')){

            $user = User::search($request->search)->get();

        }else{

            $user = User::all();        

        }

        return view('user', compact('profil','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud/createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $code = $this->generateUniqueCode();
        // $profil = User::where('id', Auth::user()->id)->first();

        if ($file = $request->file('profil_pict')) {

            $upload = $request->file('profil_pict');
            $this->validate($request, [
                'profil_pict'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/user';
            $upload->move($penyimpanan, $code.'.'.$upload->getClientOriginalExtension());
            $image = $code.'.'.$upload->getClientOriginalExtension();

            $user = User::create([
                'id' => $request->id,
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'status' => "Active",
                'profil_pict' => $image
            ]);

            if (!$user) {

                return redirect('/admin/manage-user')->with('error','Failed Create User');
            }
            
        } else {
            $user = User::create([
                'id' => $request->id,
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'status' => "Active",
            ]);

            if (!$user) {

                return redirect('/admin/manage-user')->with('error','Failed Create User');
            }
        }

        return redirect('/admin/manage-user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $user = User::find($user->id);

        // return view('user', compact('profil','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $profil = User::where('id', Auth::user()->id)->first();

        $user = User::find($id);

        return view('crud/createuser', compact('user'));
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
        // $profil = User::where('id', Auth::user()->id)->first();
        $user = User::find($id);
        $code = $this->generateUniqueCode();

        if ($file = $request->file('profil_pict')) {

            if(File::exists(public_path('user/'.$user->profil_pict))){

                File::delete(public_path('user/'.$user->profil_pict));
    
            }

            $upload = $request->file('profil_pict');
            $this->validate($request, [
                'profil_pict'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/user';
            $upload->move($penyimpanan, $code.'.'.$upload->getClientOriginalExtension());
            $image = $code.'.'.$upload->getClientOriginalExtension();

            $user->update([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'status' => $request->status,
                'profil_pict' => $image
            ]);

            if (!$user) {
                
                return redirect('/admin/manage-user')->with('error','Failed Update User');
            }
            
        } else {
            
            $user->update([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'status' => $request->status,
            ]);

            if (!$user) {
                
                return redirect('/admin/manage-user')->with('error','Failed Update User');
            }
        }

        return redirect('/admin/manage-user');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil = User::where('id', Auth::user()->id)->first();

        $user = User::find($id);
        
        if(File::exists(public_path('user/'.$user->profil_pict))){

            File::delete(public_path('user/'.$user->profil_pict));
            
            $user->delete();

        } else{

            $user->delete();

        }

        return redirect('/admin/manage-user');
    }

    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Product::where("product_pict", "=", $code)->first());
  
        return $code;
    }
}