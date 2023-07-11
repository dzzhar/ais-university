@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">View Data Kelas</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Kelas</label>
                                <p class="form-control">{{ $kelasData->kelas }}</p>
                            </div>
                        </div>
                        <div>
                            <a href="/kelas" class="btn btn-primary btn-sm" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
