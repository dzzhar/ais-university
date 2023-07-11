@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Edit Data Dosen</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/dosen/update/{{ $dosenData->id }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ $dosenData->nama }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">NIM</label>
                                    <input class="form-control" type="text" name="nid" value="{{ $dosenData->nid }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Domisili</label>
                                    <input class="form-control" type="text" name="domisili"
                                        value="{{ $dosenData->domisili }}" required>
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
