<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    function index()
    {
        $mataKuliahData = MataKuliah::get();
        return view('pages.matakuliah.index', ['mataKuliahData' => $mataKuliahData]);
    }

    function store(Request $request)
    {
        $validasiMataKuliah = $request->validate([
            'nama_matkul' => 'required',
            'kode' => 'required',
            'jurusan_id' => 'required',
            'dosen_id' => 'required',
        ]);

        MataKuliah::create($validasiMataKuliah);
        return redirect()->to('/matakuliah');
    }

    function create()
    {
        return view('pages.matakuliah.create');
    }

    function update($id, Request $request)
    {
        $validasiMataKuliah = $request->validate([
            'nama_matkul' => 'required',
            'kode' => 'required',
            'jurusan_id' => 'required',
            'dosen_id' => 'required',
        ]);

        MataKuliah::find($id)->update($validasiMataKuliah);
        return redirect()->to('/matakuliah');
    }

    function edit($id)
    {
        $mataKuliahData = MataKuliah::find($id);
        return view('pages.matakuliah.edit', compact('mataKuliahData'));
    }

    function delete($id)
    {
        $mataKuliahData = MataKuliah::find($id)->delete();

        return redirect()->to('/matakuliah')->with('Success', 'Data Mata Kuliah berhasil dihapus');
    }

    function view($id)
    {
        $mataKuliahData = MataKuliah::find($id);
        return view('pages.mataKuliah.view')->with('mataKuliahData', $mataKuliahData);
    }
}
