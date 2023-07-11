@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">View Data Mahasiswa</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Nama</label>
                                <p class="form-control">{{ $mahasiswaData->nama }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">NIM</label>
                                <p class="form-control">{{ $mahasiswaData->nim }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">ID Jurusan</label>
                                <p class="form-control">{{ $mahasiswaData->jurusan_id }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Semester</label>
                                <p class="form-control">{{ $mahasiswaData->semester }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Domisili</label>
                                <p class="form-control">{{ $mahasiswaData->domisili }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">ID Kelas</label>
                                <p class="form-control">{{ $mahasiswaData->kelas_id }}</p>
                            </div>
                        </div>
                        <div>
                            <a href="/mahasiswa" class="btn btn-primary btn-sm" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
