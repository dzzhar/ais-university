<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\MataKuliah;
use App\Models\Jurusan;
use App\Models\Kelas;

class DashboardController extends Controller
{
    function index()
    {
        $userCount = Mahasiswa::count();
        $dosenCount = Dosen::count();
        $mataKuliahCount = MataKuliah::count();
        $jurusanCount = Jurusan::count();
        $kelasCount = Kelas::count();

        return view('pages.dashboard.index', [
            'userCount' => $userCount,
            'dosenCount' => $dosenCount,
            'mataKuliahCount' => $mataKuliahCount,
            'jurusanCount' => $jurusanCount,
            'kelasCount' => $kelasCount
        ]);
    }

    function home()
    {
        $userCount = Mahasiswa::count();
        $dosenCount = Dosen::count();
        $mataKuliahCount = MataKuliah::count();
        $jurusanCount = Jurusan::count();

        return view('pages.home.index', [
            'userCount' => $userCount,
            'dosenCount' => $dosenCount,
            'mataKuliahCount' => $mataKuliahCount,
            'jurusanCount' => $jurusanCount
        ]);
    }
}