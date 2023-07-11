<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index()
    {
        $userData = User::get();
        return view('pages.user.index', ['userData' => $userData]);
    }

    function store(Request $request)
    {
        $validasiUser = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($validasiUser);
        return redirect()->to('/user');
    }

    function create()
    {
        return view('pages.user.create');
    }

    function update($id, Request $request)
    {
        $validasiUser = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::find($id)->update($validasiUser);
        return redirect()->to('/user');
    }

    function edit($id)
    {
        $userData = User::find($id);
        return view('pages.user.edit', compact('userData'));
    }

    function delete($id)
    {
        $userData = User::find($id)->delete();

        return redirect()->to('/user')->with('Success', 'Data User berhasil dihapus');
    }

    function view($id)
    {
        $userData = User::find($id);
        return view('pages.user.view')->with('userData', $userData);
    }
}
