<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nomorinduk' => 'required',
            'username' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'password' => 'required',


        ]);

        $user = new User();
        $user->name = $request->name;
        $user->nomorinduk = $request->nomorinduk;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->no_tlp = $request->no_tlp;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('user.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nomorinduk' => 'required',
            'username' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'password' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user = new User();
        $user->name = $request->name;
        $user->nomorinduk = $request->nomorinduk;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->no_tlp = $request->no_tlp;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('user.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!user::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('user.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}

