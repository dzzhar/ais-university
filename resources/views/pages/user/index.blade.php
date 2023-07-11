@extends('template.master')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex pb-4">
            <div class="col-6 align-items-center">
                <h6 class="mb-0">Data User</h6>
            </div>
            <div class="col-6 text-end">
                <a href="/user/create" class="btn btn-success btn-sm mb-0">Create New Data</a>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-4">
                                #
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Nama User
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Email
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Password
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userData as $user)
                            <tr>
                                <td>
                                    <p class="text-xs text-secondary mb-0 px-4">{{ $loop->iteration }}</p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0">{{ $user->name }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs text-secondary mb-0">{{ $user->password }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <a class="btn btn-link text-warning px-3 mb-0" href="/user/edit/{{ $user->id }}">
                                        <i class="fas fa-pencil-alt text-warning me-2"></i>Edit</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="/user/view/{{ $user->id }}">
                                        <i class="fas fa-eye text-dark me-2"></i>View</a>
                                    <a class="btn btn-link text-danger px-3 mb-0" href="/user/delete/{{ $user->id }}">
                                        <i class="far fa-trash-alt me-2"></i>Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
