<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
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
        if ($request->filled('search')) {

            $user = User::search($request->search)->get();
        } else {

            $user = User::all();
        }

        return view('user', compact('user'));
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
    public function store(Request $request)
    {
        $code = $this->generateUniqueCode();
        // $profil = User::where('id', Auth::user()->id)->first();

        $validator = Validator::make($request->all(), [
            'username' => 'unique:users',
            'email' => 'unique:users',
            'profil_pict' => '|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // $messages = [
        //     'username.unique' => 'Username Not Available',
        //     'email.unique' => 'Email Not Available',
        //     'profil_pict.mimes' => 'File Type Must Be Jpg, jpeg, Png, Gif',
        //     'profil_pict.max' => 'Max. File Size 3 MB',
        // ];

        if ($validator->fails()) {

            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        if ($file = $request->file('profil_pict')) {

            $upload = $request->file('profil_pict');
            $penyimpanan = public_path() . '/user';
            $upload->move($penyimpanan, $code . '.' . $upload->getClientOriginalExtension());
            $image = $code . '.' . $upload->getClientOriginalExtension();

            $user = User::create([
                'id' => $request->id,
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'profil_pict' => $image,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ]);
        } else {

            $user = User::create([
                'id' => $request->id,
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ]);
        }

        return redirect('/admin/manage-user')->with('success', 'Data User Created Successfully!');
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

        return view('crud/edituser', compact('user'));
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

        $validator = Validator::make($request->all(), [
            'username' => 'unique:users',
            'email' => 'unique:users',
            'profil_pict' => '|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($validator->fails()) {

            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        if ($file = $request->file('profil_pict')) {

            if (File::exists(public_path('user/' . $user->profil_pict))) {

                File::delete(public_path('user/' . $user->profil_pict));
            }

            $upload = $request->file('profil_pict');
            $penyimpanan = public_path() . '/user';
            $upload->move($penyimpanan, $code . '.' . $upload->getClientOriginalExtension());
            $image = $code . '.' . $upload->getClientOriginalExtension();

            if ($request->password == null) {

                $user->update([
                    'username' => $request->username,
                    'name' => $request->name,
                    'email' => $request->email,
                    'status' => $request->status,
                    'profil_pict' => $image,
                    'updated_at' => $request->updated_at
                ]);
            } else {

                $user->update([
                    'username' => $request->username,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'status' => $request->status,
                    'profil_pict' => $image,
                    'updated_at' => $request->updated_at
                ]);
            }
        } else {

            if ($request->password == null) {
                $user->update([
                    'username' => $request->username,
                    'name' => $request->name,
                    'email' => $request->email,
                    'status' => $request->status,
                    'updated_at' => $request->updated_at
                ]);
            } else {
                $user->update([
                    'username' => $request->username,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'status' => $request->status,
                    'updated_at' => $request->updated_at
                ]);
            }
        }

        return redirect('/admin/manage-user')->with('success', 'Data User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$profil = User::where('id', Auth::user()->id)->first();

        $user = User::findOrFail($id);

        if (File::exists(public_path('user/' . $user->profil_pict))) {

            File::delete(public_path('user/' . $user->profil_pict));

            $user->delete();
        } else {

            $user->delete();
        }


        return redirect('/admin/manage-user');
    }

    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (User::where("profil_pict", "=", $code)->first());

        return $code;
    }
}
