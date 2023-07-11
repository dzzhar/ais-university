@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Create Data Mata Kuliah</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/matakuliah/simpan-data" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Nama Mata Kuliah</label>
                                    <input class="form-control" type="text" name="nama_matkul" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Kode</label>
                                    <input class="form-control" type="text" name="kode" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">ID Jurusan</label>
                                    <input class="form-control" type="text" name="jurusan_id" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">ID Dosen</label>
                                    <input class="form-control" type="text" name="dosen_id" required>
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
