<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Jurusan;
use App\Models\Kelas;

class MahasiswaController extends Controller
{
    function index()
    {
        $mahasiswaData = Mahasiswa::get();
        return view('pages.mahasiswa.index', ['mahasiswaData' => $mahasiswaData]);
    }

    function store(Request $request)
    {
        $validasiMahasiswa = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'semester' => 'required',
            'domisili' => 'required',
            'jurusan_id' => 'required',
            'kelas_id' => 'required',
        ]);

        Mahasiswa::create($validasiMahasiswa);
        return redirect()->to('/mahasiswa');
    }

    function create()
    {
        $idJurusan = Jurusan::get();
        $idKelas = Kelas::get();
        return view('pages.mahasiswa.create', compact('idJurusan', 'idKelas'));
    }

    function update($id, Request $request)
    {
        $validasiMahasiswa = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'semester' => 'required',
            'domisili' => 'required',
            'jurusan_id' => 'required',
            'kelas_id' => 'required',
        ]);

        Mahasiswa::find($id)->update($validasiMahasiswa);
        return redirect()->to('/mahasiswa');
    }

    function edit($id)
    {
        $mahasiswaData = Mahasiswa::find($id);
        return view('pages.mahasiswa.edit', compact('mahasiswaData'));
    }

    function delete($id)
    {
        $mahasiswaData = Mahasiswa::find($id)->delete();

        return redirect()->to('/mahasiswa')->with('Success', 'Data Mahasiswa berhasil dihapus');
    }

    function view($id)
    {
        $mahasiswaData = Mahasiswa::find($id);
        return view('pages.mahasiswa.view')->with('mahasiswaData', $mahasiswaData);
    }
}
