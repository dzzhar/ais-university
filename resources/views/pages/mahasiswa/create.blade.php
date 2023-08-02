@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Create Data Mahasiswa</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/mahasiswa/simpan-data" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Nama Mahasiswa</label>
                                    <input class="form-control" type="text" name="nama" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">NIM</label>
                                    <input class="form-control" type="text" name="nim" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Domisili</label>
                                    <input class="form-control" type="text" name="domisili" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Semester</label>
                                    <input class="form-control" type="text" name="semester" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">ID Jurusan</label>
                                    <select name="jurusan_id" class="form-control">
                                        @foreach ($idJurusan as $jurusan)
                                            <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">ID Kelas</label>
                                    <select name="kelas_id" class="form-control">
                                        @foreach ($idKelas as $kelas)
                                            <option value="{{ $kelas->id }}">{{ $kelas->kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
@endsection
