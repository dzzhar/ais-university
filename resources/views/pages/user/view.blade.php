@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">View Data User</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Nama User</label>
                                <p class="form-control">{{ $userData->name }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Email</label>
                                <p class="form-control">{{ $userData->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="text-sm font-weight-bold">Password</label>
                                <p class="form-control">{{ $userData->password }}</p>
                            </div>
                        </div>
                        <div>
                            <a href="/user" class="btn btn-primary btn-sm" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
