@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">View Data Jurusan</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Nama Jurusan</label>
                                <p class="form-control">{{ $jurusanData->nama }}</p>
                            </div>
                        </div>
                        <div>
                            <a href="/jurusan" class="btn btn-primary btn-sm" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
