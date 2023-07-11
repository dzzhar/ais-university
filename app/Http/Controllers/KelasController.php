<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    function index()
    {
        $kelasData = Kelas::get();
        return view('pages.kelas.index', ['kelasData' => $kelasData]);
    }

    function store(Request $request)
    {
        $validasiKelas = $request->validate([
            'kelas' => 'required',
        ]);

        Kelas::create($validasiKelas);
        return redirect()->to('/kelas');
    }

    function create()
    {
        return view('pages.kelas.create');
    }

    function update($id, Request $request)
    {
        $validasiKelas = $request->validate([
            'kelas' => 'required',
        ]);

        Kelas::find($id)->update($validasiKelas);
        return redirect()->to('/kelas');
    }

    function edit($id)
    {
        $kelasData = Kelas::find($id);
        return view('pages.kelas.edit', compact('kelasData'));
    }

    function delete($id)
    {
        $kelasData = Kelas::find($id)->delete();

        return redirect()->to('/kelas')->with('Success', 'Data Kelas berhasil dihapus');
    }

    function view($id)
    {
        $kelasData = Kelas::find($id);
        return view('pages.kelas.view')->with('kelasData', $kelasData);
    }
}
