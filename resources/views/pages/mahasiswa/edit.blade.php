@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Edit Data Mahasiswa</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/mahasiswa/update/{{ $mahasiswaData->id }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Nama Mahasiswa</label>
                                    <input class="form-control" type="text" name="nama"
                                        value="{{ $mahasiswaData->nama }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">NIM</label>
                                    <input class="form-control" type="text" name="nim"
                                        value="{{ $mahasiswaData->nim }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Domisili</label>
                                    <input class="form-control" type="text" name="domisili"
                                        value="{{ $mahasiswaData->domisili }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Semester</label>
                                    <input class="form-control" type="text" name="semester"
                                        value="{{ $mahasiswaData->semester }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">ID Jurusan</label>
                                    <input class="form-control" type="text" name="jurusan_id"
                                        value="{{ $mahasiswaData->jurusan_id }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">ID Kelas</label>
                                    <input class="form-control" type="text" name="kelas_id"
                                        value="{{ $mahasiswaData->kelas_id }}" required>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
@endsection
