<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    function index()
    {
        $dosenData = Dosen::get();
        return view('pages.dosen.index', ['dosenData' => $dosenData]);
    }

    function store(Request $request)
    {
        $validasiDosen = $request->validate([
            'nama' => 'required',
            'nid' => 'required',
            'domisili' => 'required',
        ]);

        Dosen::create($validasiDosen);
        return redirect()->to('/dosen');
    }

    function create()
    {
        return view('pages.dosen.create');
    }

    function update($id, Request $request)
    {
        $validasiDosen = $request->validate([
            'nama' => 'required',
            'nid' => 'required',
            'domisili' => 'required',
        ]);

        Dosen::find($id)->update($validasiDosen);
        return redirect()->to('/dosen');
    }

    function edit($id)
    {
        $dosenData = Dosen::find($id);
        return view('pages.dosen.edit', compact('dosenData'));
    }

    function delete($id)
    {
        $dosenData = Dosen::find($id)->delete();

        return redirect()->to('/dosen')->with('Success', 'Data Dosen berhasil dihapus');
    }

    function view($id)
    {
        $dosenData = Dosen::find($id);
        return view('pages.dosen.view')->with('dosenData', $dosenData);
    }
}
