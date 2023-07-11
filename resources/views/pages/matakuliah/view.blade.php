@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">View Data Mata Kuliah</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Nama Mata Kuliah</label>
                                <p class="form-control">{{ $mataKuliahData->nama_matkul }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Kode</label>
                                <p class="form-control">{{ $mataKuliahData->kode }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">ID Jurusan</label>
                                <p class="form-control">{{ $mataKuliahData->jurusan_id }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">ID Dosen</label>
                                <p class="form-control">{{ $mataKuliahData->dosen_id }}</p>
                            </div>
                        </div>
                        <div>
                            <a href="/matakuliah" class="btn btn-primary btn-sm" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
