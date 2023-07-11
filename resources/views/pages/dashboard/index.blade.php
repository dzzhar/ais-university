@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-1 text-uppercase font-weight-bold">Mahasiswa Aktif</p>
                                <h5 class="font-weight-bolder ">
                                    {{ $userCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="ni ni-hat-3 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-1 text-uppercase font-weight-bold">Dosen Pengajar</p>
                                <h5 class="font-weight-bolder">
                                    {{ $dosenCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-1 text-uppercase font-weight-bold">Jurusan</p>
                                <h5 class="font-weight-bolder">
                                    {{ $jurusanCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-1 text-uppercase font-weight-bold">Kelas</p>
                                <h5 class="font-weight-bolder">
                                    {{ $kelasCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                <i class="ni ni-single-copy-04 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-lg-4">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-1 text-uppercase font-weight-bold">Mata Kuliah</p>
                                <h5 class="font-weight-bolder">
                                    {{ $mataKuliahCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                <i class="ni ni-single-copy-04 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
