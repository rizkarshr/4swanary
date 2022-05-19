<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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

        if($request->filled('search')){

            $user = User::search($request->search)->get();

        }else{

            $user = User::get();

        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get all user",
            'data' => $user
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
    public function store(Request $request, User $user)
    {
        // $user = User::find($id);

        if ($file = $request->file('profil_pict')) {

            $upload = $request->file('profil_pict');
            $this->validate($request, [
                'profil_pict'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/user';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

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
                // return $this->sendError("", "failed create user");
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
                return response()->json([
                    'code' => 422,
                    'status' => false,
                    'message' => "Failed get the user",
                    'data' => ""
                ]);
            }
        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get the user",
            'data' => $user
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = User::find($user->id);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get the user",
            'data' => $user
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
    public function update(Request $request, User $user)
    {
        // $user = User::find($user->id);
        
        if ($file = $request->file('profil_pict')) {

            if(File::exists(public_path('user/'.$user->profil_pict))){

                File::delete(public_path('user/'.$user->profil_pict));
    
            }

            $upload = $request->file('profil_pict');
            $this->validate($request, [
                'profil_pict'=>'|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $penyimpanan = public_path().'/user';
            $upload->move($penyimpanan, $request->id.'.'.$upload->getClientOriginalExtension());
            $image = $request->id.'.'.$upload->getClientOriginalExtension();

            $user->update([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'status' => $request->status,
                'profil_pict' => $image
            ]);

            if (!$user) {
                // return $this->sendError("", "failed create user");

                return response()->json([
                    'code' => 422,
                    'status' => False,
                    'message' => "Failed update the user",
                    'data' => ""
                ]);
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
                
                // return $this->sendError("", "failed update user");

                return response()->json([
                    'code' => 422,
                    'status' => False,
                    'message' => "Failed update the user",
                    'data' => ""
                ]);
            }
        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success update the user",
            'data' => $user
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = User::find($user->id);
        
        if(File::exists(public_path('user/'.$user->profil_pict))){

            File::delete(public_path('user/'.$user->profil_pict));
            
            $user->delete();

        } else{

            $user->delete();

        }

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete the user",
            'data' => ""
        ]);
    }
}
