@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Create Data Jurusan</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/jurusan/simpan-data" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama" class="text-sm font-weight-bold">Nama Jurusan</label>
                                    <input class="form-control" type="text" name="nama" required>
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
