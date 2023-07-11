<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    function index()
    {
        $jurusanData = Jurusan::get();
        return view('pages.jurusan.index', ['jurusanData' => $jurusanData]);
    }

    function store(Request $request)
    {
        $validasiJurusan = $request->validate([
            'nama' => 'required',
        ]);

        Jurusan::create($validasiJurusan);
        return redirect()->to('/jurusan');
    }

    function create()
    {
        return view('pages.jurusan.create');
    }

    function update($id, Request $request)
    {
        $validasiJurusan = $request->validate([
            'nama' => 'required',
        ]);

        Jurusan::find($id)->update($validasiJurusan);
        return redirect()->to('/jurusan');
    }

    function edit($id)
    {
        $jurusanData = Jurusan::find($id);
        return view('pages.jurusan.edit', compact('jurusanData'));
    }

    function delete($id)
    {
        $jurusanData = Jurusan::find($id)->delete();

        return redirect()->to('/jurusan')->with('Success', 'Data Jurusan berhasil dihapus');
    }

    function view($id)
    {
        $jurusanData = Jurusan::find($id);
        return view('pages.jurusan.view')->with('jurusanData', $jurusanData);
    }
}
