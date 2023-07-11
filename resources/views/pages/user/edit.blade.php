@extends('template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Edit Data User</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/user/update/{{ $userData->id }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Nama User</label>
                                    <input class="form-control" type="text" name="name" value="{{ $userData->name }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Email</label>
                                    <input class="form-control" type="email" name="email" value="{{ $userData->email }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="text-sm font-weight-bold">Password</label>
                                    <input class="form-control" type="text" name="password"
                                        value="{{ $userData->password }}" required>
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
