<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
            'email' => 'required|email:rfc,dns',
            'tipe' => 'required'
        ]);

        if ($request->input('passworrd')) {
            $password = bcrypt($request->password);
        } else {
            $password = bcrypt('1234');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tipe' => $request->tipe,
            'password' => $password
        ]);

        return redirect()->back()->with('success', 'User Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.user.edit', compact('users'));
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
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
            'tipe' => 'required'
        ]);

        if ($request->input('password')) {

            $user_data = [
                'name' => $request->name,
                'tipe' => $request->tipe,
                'password' => bcrypt($request->password)
            ];
        } else {
            $user_data = [
                'name' => $request->name,
                'tipe' => $request->tipe
            ];
        }

        $users = User::find($id);
        $users->update($user_data);

        return redirect()->route('user.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->back()->with('hapus', 'Data berhasil dihapus');
    }
}
